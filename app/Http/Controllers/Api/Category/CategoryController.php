<?php

namespace App\Http\Controllers\Api\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    //
    public function cat_search(Request $request, $keyword)
    {

        $keyword = explode(",", $keyword);
        if ($keyword != '') {
            foreach ($keyword as $keywordss) {
                $catdata = Category::where('title', 'like', '%' . $keywordss . '%')->get();
            }
        } else {
            $catdata = Category::orderBy('id', 'desc')->get();
        }
        if ($catdata > 0) {
            return json_encode(['status' => true, 'category' => $catdata, 'result' => 'Data Found']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }

    public function apicall(Request $request)
    {
        $locale = $request->header('Accept-Language') ?? 'en';



        $listings       = DB::table('listings')->get();
        $bartners       = DB::table('bartners')->where('is_mobile', null)->get();
        $bartners_category       = DB::table('bartners')->where('is_mobile', 1)->get();
        $sartners       = DB::table('sartners')->get();
        if ($locale == 'ar') {
            $homeCategories = Category::select('categories.*', 'categories.title_arbic as title')->withCount('subcategories')
                ->orderBy('id', 'asc')
                ->get();
            $popularcat     = DB::select('SELECT * , COALESCE(NULLIF(categories.title_arbic, \'\'), categories.title) as title  FROM categories WHERE parent_id IS NULL AND pop_home_cat=1 ORDER by id DESC LIMIT 5');
            $ExploreCategory = DB::select('SELECT *,COALESCE(NULLIF(categories.title_arbic, \'\'), categories.title) as title   FROM categories WHERE is_top=0 and parent_id IS NULL');
            $partners  = DB::table('partners')
                ->select('*', DB::raw('COALESCE(NULLIF(partners.brand_name_arbic, \'\'), partners.brand_name) as brand_name'))
                ->get();
        } else {
            $partners   = DB::table('partners')->get();
            $popularcat  = DB::select('SELECT * FROM categories WHERE parent_id IS NULL AND pop_home_cat=1 ORDER by id DESC LIMIT 5');
            $ExploreCategory = DB::select('SELECT * FROM categories WHERE is_top=0 and parent_id IS NULL');
            $homeCategories = Category::withCount('subcategories')
                ->where('is_popular', 1)
                ->orderBy('id', 'asc')
                ->get();
        }
        foreach ($popularcat as $key => $popularcat_data) {
            $ids = $popularcat_data->slug;
            if ($locale == 'ar') {
                $popularsubcat  = DB::table('categories')->select('categories.*', 'categories.title_arbic as title')->where('pop_cat', 1)->get();
            } else {
                $popularsubcat  = DB::table('categories')->where('pop_cat', 1)->get();
            }
        }
        $newhomeCategories = [];
        $newhomeCategories1 = [];
        foreach ($homeCategories as $key => $homeCategory) {
            if ($key >= 3) {
                array_push($newhomeCategories, $homeCategory);
            } else {
                array_push($newhomeCategories1, $homeCategory);
            }
        }

        $testimonial    = DB::table('reviews')->get();
        $count = $bartners->count();

        if ($count > 0) {
            return  json_encode(['status' => true, 'homecategory1' => $newhomeCategories1, 'homecategory2' => $newhomeCategories, 'listings' => $listings, 'partners' => $partners, 'bannerslider' => $bartners, "category_banner" => $bartners_category, 'smallbanner' => $sartners, 'popularcat' => $popularcat, 'popularsubcat' => $popularsubcat, 'testimonial' => $testimonial, 'explorecategory' => $ExploreCategory, 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }

    public function allcategoryapi(Request $request)
    {
        // $allcategories = DB::table('categories')->where('parent_id', NULL)->get();
        $locale = $request->header('Accept-Language') ?? 'en';

        if ($locale == 'ar') {
            $allcategories = Category::select('categories.*', 'categories.title_arbic as title')->withCount('subcategories')
                // ->orderBy('id', 'asc')
                ->where('parent_id', NULL)
                ->get();
        } else {
            $allcategories = Category::withCount('subcategories')
                // ->orderBy('id', 'asc')
                ->where('parent_id', NULL)
                ->get();
        }

        $count = $allcategories->count();
        $locale = $request->header('Accept-Language') ?? 'en';
        // $locale = 'ar';
        // dd($locale);
        // if ($locale == 'ar') {
        //     $translationFile = resource_path("lang/1688299864oqIjFrT6.json");
        //     $translations = json_decode(File::get($translationFile), true);
        //     $languageTranslations = $translations;
        //     $translatedCategories = $allcategories->map(function ($category) use ($languageTranslations) {
        //         $categoryId = $category->id;
        //         $translatedName = $languageTranslations[$category->title] ?? $category->title;
        //         return [
        //             'id' => $categoryId,
        //             'title' => $translatedName,
        //             'slug' =>  $category->slug,
        //             'photo' =>  $category->photo,
        //             'photo1' =>  $category->photo1,
        //             'photo_banner' =>  $category->photo_banner,
        //             'photo3' =>  $category->photo3,
        //             'pop_cat' =>  $category->pop_cat,
        //             'status' =>  $category->status,
        //             'parent_id' =>  $category->parent_id,
        //             'is_top' =>  $category->is_top,
        //             'pop_home_cat' =>  $category->pop_home_cat,
        //             'bg_color' =>  $category->bg_color,
        //             'created_at' =>  $category->created_at,
        //             'updated_at' =>  $category->updated_at,
        //             'subcategories_count' => $category->subcategories_count
        //         ];
        //     });
        // } else {
        //     $translatedCategories = $allcategories;
        // }

        if ($count > 0) {
            return  json_encode(['status' => true, 'allcategories' => $allcategories, 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }
}
