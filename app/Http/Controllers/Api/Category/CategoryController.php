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

        $homeCategories = DB::table('categories')
            ->where('is_top', true)
            ->orderBy('id', 'asc') // Use orderBy instead of order_by
            ->limit(7)
            ->get();
        $listings       = DB::table('listings')->get();
        $bartners       = DB::table('bartners')->get();
        $partners       = DB::table('partners')->get();
        $sartners       = DB::table('sartners')->get();
        $popularcat     = DB::select('SELECT * FROM categories WHERE parent_id IS NULL AND pop_home_cat=1 ORDER by id DESC LIMIT 5');
        foreach ($popularcat as $key => $popularcat_data) {
            $ids = $popularcat_data->slug;
            $popularsubcat  = DB::table('categories')->where('pop_cat', 1)->get();
        }
        $ExploreCategory = DB::select('SELECT * FROM categories WHERE is_top=0 and parent_id IS NULL');
        $testimonial    = DB::table('reviews')->get();
        $count = $bartners->count();
        if ($locale == 'ar') {
            $translationFile = resource_path("lang/1688299864oqIjFrT6.json");
            $translations = json_decode(File::get($translationFile), true);
            $languageTranslations = $translations;
            $translatedCategories = $homeCategories->map(function ($category) use ($languageTranslations) {
                $categoryId = $category->id;
                $translatedName = $languageTranslations[$category->title] ?? $category->title;
                return [
                    'id' => $categoryId,
                    'name' => $translatedName,
                ];
            });
        } else {
            $translatedCategories = $homeCategories;
        }
        if ($count > 0) {
            return  json_encode(['status' => true, 'homecategory' => $translatedCategories, 'listings' => $listings, 'partners' => $partners, 'bannerslider' => $bartners, 'smallbanner' => $sartners, 'popularcat' => $popularcat, 'popularsubcat' => $popularsubcat, 'testimonial' => $testimonial, 'explorecategory' => $ExploreCategory, 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
            //return view('frontend.api_code', json_encode(['status' => false,'data' => 'Not Found']));  
        }
    }

    public function allcategoryapi(Request $request)
    {
        $allcategories = DB::table('categories')->where('parent_id', NULL)->get();
        $count = $allcategories->count();
        $locale = $request->header('Accept-Language') ?? 'en';
        if ($locale == 'ar') {
            $translationFile = resource_path("lang/1688299864oqIjFrT6.json");
            $translations = json_decode(File::get($translationFile), true);
            $languageTranslations = $translations;
            $translatedCategories = $allcategories->map(function ($category) use ($languageTranslations) {
                $categoryId = $category->id;
                $translatedName = $languageTranslations[$category->title] ?? $category->title;
                return [
                    'id' => $categoryId,
                    'name' => $translatedName,
                ];
            });
        } else {
            $translatedCategories = $allcategories;
        }

        if ($count > 0) {
            return  json_encode(['status' => true, 'allcategories' => $translatedCategories, 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }
}
