<?php

namespace App\Http\Controllers\Api\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    //
    public function allsubcategoryapi(Request $request, $slug)
    {
        $locale = $request->header('Accept-Language') ?? 'en';




        if ($locale == 'ar') { 
            $categoriesubID = Category::where('slug', $slug)->get();
            $categoriesub_banner = DB::select("SELECT photo_banner FROM categories where slug='$slug'");
            foreach ($categoriesub_banner as $key => $categoriesub_bannerss) {
                $sub_cat_banner = $categoriesub_bannerss->photo_banner;
            }
            foreach ($categoriesubID as $key => $categoriesubIDnn) {
                $subcategories = Category::select('categories.*', 'categories.title_arbic as title')->where('parent_id', $categoriesubIDnn->id)->get();
            }
        } else {
            $categoriesubID = Category::where('slug', $slug)->get();
            $categoriesub_banner = DB::select("SELECT photo_banner FROM categories where slug='$slug'");
            foreach ($categoriesub_banner as $key => $categoriesub_bannerss) {
                $sub_cat_banner = $categoriesub_bannerss->photo_banner;
            }
            foreach ($categoriesubID as $key => $categoriesubIDnn) {
                $subcategories = Category::where('parent_id', $categoriesubIDnn->id)->get();
            }
        }

        //$subcategories = DB::table('categories')->where('status',1)->where('slug',$id)->get(); 
        $count = $subcategories->count();
        if ($count > 0) {
            return  json_encode(['status' => true, 'subcategory' => $subcategories, 'SubCatBanner' => $sub_cat_banner, 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'SubCatBanner' => $sub_cat_banner, 'result' => 'Data Not Found']);
            //return view('frontend.api_code', json_encode(['status' => false,'data' => 'Not Found']));  
        }
    }


    public function SubCat_search_api(Request $request)
    {
        $categoriesub = Category::where('slug', $request->keyword)->get();
        $allcategory_query = Category::query();

        if ($request->keyword) {
            $allcategory_query->where('title', 'LIKE', "%$request->keyword%");
        }

        $allcategory = $allcategory_query->get();

        if ($allcategory != '') {
            return json_encode(['status' => true, 'SubCategory' => $allcategory, 'result' => 'Data Found']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }
}
