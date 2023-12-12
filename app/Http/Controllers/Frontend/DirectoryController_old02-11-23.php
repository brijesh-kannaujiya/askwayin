<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Listing;
use App\Models\ListingEnquiry;
use App\Models\ListingReview;
use App\Models\ListingFaq;
use App\Models\Location;
use Jenssegers\Agent\Agent;
use App\Models\RecentViewsListing;
use App\Models\User;
use App\Models\Wishlists;
use Illuminate\Http\Request;
use Validator;
use DB;

class DirectoryController extends Controller
{
    public function listing(Request $request)
    {
        $categories = $request->category ? $request->category[0] : null;
        $locations = $request->location ? $request->location[0] : null;
        $types = $request->type ? $request->type[0] : null;
        $types = $request->type ? $request->type[0] : null;
        $real_address = $request->real_address ? $request->real_address : null;

        $data['categories'] = Category::whereIsTop(1)->orderBy('id', 'desc')->get();
        $data['locations'] = Location::whereStatus(1)->orderBy('id', 'desc')->get();

        $data['listings'] = Listing::when($categories, function ($query, $categories) {
            $categories = explode(",", $categories);
            foreach ($categories as $key => $category) {
                $cat = Category::whereSlug($category)->first();
                if ($key == 0) {
                    if ($cat != NULL) {
                        $query->where('category_id', $cat->id);
                    }
                } else {
                    if ($cat != NULL) {
                        $query->orWhere('category_id', $cat->id);
                    }
                }
            }
            return $query;
        })
            ->when($locations, function ($query, $locations) {
                $locations = explode(",", $locations);
                foreach ($locations as $key => $location) {
                    if ($key == 0) {
                        $query->where('location_id', $location);
                    } else {
                        $query->orWhere('location_id', $location);
                    }
                }
                return $query;
            })
            ->when($types, function ($query, $types) {
                $types = explode(",", $types);
                foreach ($types as $key => $type) {
                    if ($key == 0) {
                        $query->where('type', $type);
                    } else {
                        $query->orWhere('type', $type);
                    }
                }
                return $query;
            })
            ->when($real_address, function ($q) use ($real_address) {
                return $q->where('real_address', 'LIKE', "%$real_address%");
            })
            ->whereStatus(1)
            ->orderBy('id', 'desc')
            ->paginate(12);
        if ($request->ajax()) {
            return view('partials.front.listing', $data);
        }

        return view('frontend.list', $data);
    }



    public function subcategory(Request $request, $slug)
    {
        $categoriesubID = Category::where('slug', $slug)->get();
        foreach ($categoriesubID as $key => $categoriesubIDnn) {
            $data['categoriesub'] = Category::where('parent_id', $categoriesubIDnn->id)->get();
        }
        return view('frontend.subcat', $data);
    }


    ////////// API WORK START ///////////////////

    public function allcategoryapi(Request $request)
    {
        $allcategories = DB::table('categories')->where('parent_id', NULL)->get();
        $count = $allcategories->count();
        if ($count > 0) {
            return  json_encode(['status' => true, 'allcategories' => $allcategories, 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }



    public function register(Request $request)
    {

        $rules = [
            'name' => 'required|alpha_dash|min:5|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required',
            'username' => 'required',
            'password' => 'required||min:6|confirmed'
        ];
        $validator = Validator::make($request->all(), $rules);

        if (User::where('email', $request->email)->first()) {
            return response([
                'message' => 'Email already exists',
                'status' => 'failed'
            ], 200);
        }
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $token = $token = md5(time() . $request->name . $request->email);
        return response([
            'token' => $token,
            'message' => 'Registration Success',
            'status' => 'success'
        ], 201);
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $token = md5(time() . $request->name . $request->email);

            return response([
                'token' => $token,
                'name' => $user->name,
                'phone' => $user->phone,
                'email' => $user->email,
                'message' => 'Login Success',
                'status' => 'success'
            ], 200);
        } else {
            return  json_encode(['status' => false, 'result' => 'The Provided Credentials are incorrect']);
        }
        return response([
            'message' => 'Something Wrong.',
            'status' => 'failed'
        ], 401);
    }

    public function logout()
    {
        //$user = User::where('email', $request->email)->first();
        ///auth()->user()->$user->token->delete();
        return response([
            'message' => 'Logout Success',
            'status' => 'success'
        ], 200);
    }

    public function logged_user()
    {
        $loggeduser = auth()->user();
        return response([
            'user' => $loggeduser,
            'message' => 'Logged User Data',
            'status' => 'success'
        ], 200);
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        $loggeduser = auth()->user();
        $loggeduser->password = Hash::make($request->password);
        $loggeduser->save();
        return response([
            'message' => 'Password Changed Successfully',
            'status' => 'success'
        ], 200);
    }


    public function apicall(Request $request)
    {
        $homecategories = DB::select('SELECT * FROM categories WHERE  is_top=1 ORDER by id asc LIMIT 7');
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
        if ($count > 0) {
            return  json_encode(['status' => true, 'homecategory' => $homecategories, 'listings' => $listings, 'partners' => $partners, 'bannerslider' => $bartners, 'smallbanner' => $sartners, 'popularcat' => $popularcat, 'popularsubcat' => $popularsubcat, 'testimonial' => $testimonial, 'explorecategory' => $ExploreCategory, 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
            //return view('frontend.api_code', json_encode(['status' => false,'data' => 'Not Found']));  
        }
    }

    public function allproduct_slug(Request $request, $slug = '')
    {
        if ($slug != '') {
            $categoriesub = Category::where('slug', $slug)->get();
            foreach ($categoriesub as $key => $categoriesubIDp) {
                $allproduct   = DB::table('listings')->where('status', 1)->where('category_id', $categoriesubIDp->id)->get();
                foreach ($allproduct as $key => $allproduct_ss) {
                    $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
                    $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
                    $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules, true) : [];
                    $is_feature = $allproduct_ss->is_feature;
                    if ($is_feature == 1) {
                        $is_feature = 'FEATURED';
                    }

                    $OpenCloseTime = $data->openClose($data->id);
                    $ratingcount = $data->directoryRatting($data->id);
                    //dd($OpenCloseTime);

                }
            }
        } else {
            $allproduct   = DB::table('listings')->where('status', 1)->get();
            foreach ($allproduct as $key => $allproduct_ss) {
                $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
                $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
                $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules, true) : [];
                $is_feature = $allproduct_ss->is_feature;
                if ($is_feature == 1) {
                    $is_feature = 'FEATURED';
                }

                $OpenCloseTime = $data->openClose($data->id);
                $ratingcount = $data->directoryRatting($data->id);
                //dd($data->openClose($data->id));

            }
        }
        $count = $allproduct->count();
        if ($count > 0) {
            return json_encode(['status' => true, 'lishting' => $allproduct, 'CatName' => $categorieName, 'is_feature' => $is_feature, 'OpenCloseTime' => $OpenCloseTime, 'Review' => $data['reviews'], 'Ratting' => $ratingcount, 'result' => 'Data Found']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }



    public function allproduct(Request $request)
    {

        $allproduct = DB::table('listings')->where('status', 1)->get();
        foreach ($allproduct as $key => $allproduct_ss) {
            $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
            $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
            $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
            $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules, true) : [];
            $is_feature = $allproduct_ss->is_feature;
            if ($is_feature == 1) {
                $is_feature = 'FEATURED';
            }
            $OpenCloseTime = $data->openClose($data->id);
        }
        $count = $allproduct->count();
        if ($count > 0) {
            return  json_encode(['status' => true, 'allproduct' => $allproduct, 'CatName' => $categorieName, 'is_feature' => $is_feature, 'OpenCloseTime' => $OpenCloseTime, 'Review' => $data['reviews'], 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
            //return view('frontend.api_code', json_encode(['status' => false,'data' => 'Not Found']));  
        }
    }

    public function allsubcategoryapi(Request $request, $slug)
    {

        $categoriesubID = Category::where('slug', $slug)->get();
        $categoriesub_banner = DB::select("SELECT photo_banner FROM categories where slug='$slug'");
        foreach ($categoriesub_banner as $key => $categoriesub_bannerss) {
            $sub_cat_banner = $categoriesub_bannerss->photo_banner;
        }
        foreach ($categoriesubID as $key => $categoriesubIDnn) {
            $subcategories = Category::where('parent_id', $categoriesubIDnn->id)->get();
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



    // public function cat_search(Request $request, $keyword){

    //     $keyword =  explode(",",$keyword);
    //     if($keyword != ''){
    //     foreach($keyword as $keywordss){
    //     $catdata = Category::where('title', 'like', '%'.$keywordss.'%')->get();
    //     }
    //     }
    //     else
    //     {
    //       $catdata = Category::orderBy('id','desc')->get();
    //     }
    //     if($catdata>0){
    //     return  json_encode(['status'=>true,'category'=>$catdata,'result'=>'Data Found']);
    //     }
    //     else
    //     {
    //         return  json_encode(['status'=>false,'result'=>'Data Not Found']);
    //     }
    // }





    public function lishting(Request $request, $slug = '')
    {
        if ($slug != '') {
            $categoriesub = Category::where('slug', $slug)->get();
            foreach ($categoriesub as $key => $categoriesubIDp) {
                $allproduct   = DB::table('listings')->where('status', 1)->where('category_id', $categoriesubIDp->id)->get();
                foreach ($allproduct as $key => $allproduct_ss) {
                    $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
                    $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
                    $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules, true) : [];
                    $is_feature = $allproduct_ss->is_feature;
                    if ($is_feature == 1) {
                        $is_feature = 'FEATURED';
                    }

                    $OpenCloseTime = $data->openClose($data->id);
                    //dd($OpenCloseTime);

                    $listing_reviews   = DB::table('listing_reviews')->where('listing_id', $allproduct_ss->id)->get();
                    // dd($listing_reviews)

                    // Initialize variables to calculate the total rating and count
                    $totalRating = 0;
                    $reviewCount = count($listing_reviews);

                    // Calculate the total rating
                    foreach ($listing_reviews as $review) {
                        //dd($review);
                        $totalRating += $review->rate;
                    }
                    //echo $totalRating;
                    // Calculate the average rating
                    if ($reviewCount > 0) {
                        $averageRating = $totalRating / $reviewCount;
                        //$averageRating = ($totalRating / 5) * 100;
                    } else {
                        $averageRating = 0; // Handle the case when there are no reviews
                    }

                    // Round the average rating to a desired number of decimal places
                    $decimalPlaces = 2; // Adjust as needed
                    $averageRating = round($averageRating, $decimalPlaces);

                    // Output the calculated average rating
                    //echo "The average rating is: $averageRating";

                }
            }
        } else {
            $allproduct   = DB::table('listings')->where('status', 1)->get();
            foreach ($allproduct as $key => $allproduct_ss) {
                $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
                $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
                $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules, true) : [];
                $is_feature = $allproduct_ss->is_feature;
                if ($is_feature == 1) {
                    $is_feature = 'FEATURED';
                }

                $OpenCloseTime = $data->openClose($data->id);
                //dd($data->openClose($data->id));

                $listing_reviews   = DB::table('listing_reviews')->where('listing_id', $allproduct_ss->id)->get();
                // dd($listing_reviews)

                // Initialize variables to calculate the total rating and count
                $totalRating = 0;
                $reviewCount = count($listing_reviews);

                // Calculate the total rating
                foreach ($listing_reviews as $review) {
                    //dd($review);
                    $totalRating += $review->rate;
                }
                //echo $totalRating;
                // Calculate the average rating
                if ($reviewCount > 0) {
                    $averageRating = $totalRating / $reviewCount;
                    //$averageRating = ($totalRating / 5) * 100;
                } else {
                    $averageRating = 0; // Handle the case when there are no reviews
                }

                // Round the average rating to a desired number of decimal places
                $decimalPlaces = 2; // Adjust as needed
                $averageRating = round($averageRating, $decimalPlaces);

                // Output the calculated average rating
                //echo "The average rating is: $averageRating";

            }
        }
        $count = $allproduct->count();
        if ($count > 0) {
            return json_encode(['status' => true, 'lishting' => $allproduct, 'CatName' => $categorieName, 'is_feature' => $is_feature, 'OpenCloseTime' => $OpenCloseTime, 'Review' => $data['reviews'], 'ReviewRatting' => $averageRating, 'result' => 'Data Found']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }



    public function product_detail($slug)
    {

        $data = Listing::whereSlug($slug)->whereStatus(1)->first();
        $data['amenities'] = $data->amenities != NULL ? json_decode($data->amenities, true) : [];
        $data['schedules'] = $data->schedules != NULL ? json_decode($data->schedules, true) : [];
        $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
        $data['faq'] = ListingFaq::whereListingId($data->id)->get();
        $data['data'] = $data;
        //print_r($data['reviews']);

        $datadd = Listing::where('slug', $slug)->get();
        foreach ($datadd as $key => $datareview) {
            $listing_reviews   = DB::table('listing_reviews')->where('listing_id', $datareview->id)->get();
            // dd($listing_reviews);
        }

        // Initialize variables to calculate the total rating and count
        $totalRating = 0;
        $reviewCount = count($listing_reviews);

        // Calculate the total rating
        foreach ($listing_reviews as $review) {
            //dd($review);
            $totalRating += $review->rate;
        }
        //echo $totalRating;
        // Calculate the average rating
        if ($reviewCount > 0) {
            $averageRating = $totalRating / $reviewCount;
            //$averageRating = ($totalRating / 5) * 100;
        } else {
            $averageRating = 0; // Handle the case when there are no reviews
        }

        // Round the average rating to a desired number of decimal places
        $decimalPlaces = 2; // Adjust as needed
        $averageRating = round($averageRating, $decimalPlaces);

        // Output the calculated average rating
        //echo "The average rating is: $averageRating";


        //   if($data->openClose($data->id)=='open'){
        //       echo $data->openClose($data->id);
        //   }


        if (auth()->user()) {
            $this->recentViews($data->id, $data->user_id);
            $data['recentViews'] = RecentViewsListing::whereNotIn('listing_id', [$data->id])->whereUserId(auth()->id())->orderBy('id', 'desc')->limit(4)->get();
        }

        if ($data) {
            return  json_encode(['status' => true, 'description' => $data->description, 'Rating' => $data->directoryRatting($data->id), 'ProductName' => $data->name, 'type' => $data->type, 'OpenCloseTime' => $data->openClose($data->id), 'Amenities' => $data['amenities'], 'Faqs' => $data['faq'], 'galleries' => $data->galleries, 'Review' => $data['reviews'], 'ProductLocation' => 'https://maps.google.com/maps?q="' . $data->latitude . '","' . $data->longitude . '"&t=&z=13&ie=UTF8&iwloc=&output=embed', 'schedules' => $data['schedules'], 'ReviewRatting' => $averageRating, 'result' => 'Data Found']);
            //return view('frontend.details',$data);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
        return view('errors.404');
    }



    ////////// API WORK END ///////////////////    





    public function searching_item(Request $request)
    {
        if ($request->ajax()) {
            //$data = Listing::where('name', 'LIKE', "%$request->name%")->get();
            $data = Listing::where('name', 'like', '%' . $request->name . '%')->get();
            //die($data);
            $output = '';
            if (count($data) > 0) {
                $output = "<ul class='list-group'>";
                foreach ($data as $row) {
                    $output .= "<li class='list-group-item'>$row->name</li>";
                }
                $output .= "</ul>";
            } else {

                $output = "<li class='list-group-item'>No Data Found</li>";
            }
            return  $output;
        }
        return view('frontend.index');
    }



    public function cat_searching_item(Request $request)
    {
        if ($request->ajax()) {
            //$data = Listing::where('name', 'LIKE', "%$request->name%")->get();
            $catdata = Category::where('title', 'like', '%' . $request->title . '%')->get();
            //die($data);
            $catoutput = '';
            if (count($catdata) > 0) {
                $catoutput = "<ul class='list-group' style='margin-top: 65px;'>";
                foreach ($catdata as $row1) {
                    $catoutput .= "<li class='list-group-item' style='width: 200px;margin: 1px 1px 1px -150px;'>$row1->title</li>";
                }
                $catoutput .= "</ul>";
            } else {

                $catoutput = "<li class='list-group-item' style='width: 200px;margin: 75px 0px -30px -150px;'>No Data Found</li>";
            }
            return  $catoutput;
        }
        return view('frontend.index');
    }



    public function listingDetails($slug)
    {
        $data = Listing::whereSlug($slug)->whereStatus(1)->first();
        $data['amenities'] = $data->amenities != NULL ? json_decode($data->amenities, true) : [];
        $data['schedules'] = $data->schedules != NULL ? json_decode($data->schedules, true) : [];
        $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
        $data['data'] = $data;

        if (auth()->user()) {
            $this->recentViews($data->id, $data->user_id);
            $data['recentViews'] = RecentViewsListing::whereNotIn('listing_id', [$data->id])->whereUserId(auth()->id())->orderBy('id', 'desc')->limit(4)->get();
        }

        if ($data) {
            return view('frontend.details', $data);
        } else {
            return view('errors.404');
        }
    }

    public function recentViews($id, $userId)
    {
        $agent = new Agent();
        $data = new RecentViewsListing();
        $data->user_id    = auth()->id();
        $data->listing_owner_id  = $userId;
        $data->listing_id = $id;
        $data->device = $agent->device();
        $data->browser = $agent->browser();
        $data->operating_system = $agent->platform();
        $data->save();
        return;
    }

    public function authorDetails($username)
    {
        if ($username == 'admin') {
            $data['listings'] = Listing::where('admin_id', NULL)->where('user_id', NULL)->paginate(6);
            $data['admin'] = Admin::first();
        } else {
            $data['user'] = User::whereUsername($username)->first();
            $data['listings'] = Listing::whereUserId($data['user']->id)->whereStatus(1)->orderBy('id', 'desc')->paginate(6);
        }

        return view('frontend.author_details', $data);
    }

    public function listingEnquiry(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'details' => 'required',
        ]);

        if (auth()->user() == NULL) {
            return back()->with('warning', 'Please login first!');
        }

        if (Listing::whereId($request->listing_id)->whereUserId(auth()->id())->exists()) {
            return back()->with('warning', 'You are the owner of this directory!');
        }

        if (ListingEnquiry::whereListingId($request->listing_id)->whereUserId(auth()->id())->exists()) {
            return back()->with('warning', 'You have already submitted message for this directory!');
        }

        $listing = Listing::whereId($request->listing_id)->first();

        $data = new ListingEnquiry();
        $data->user_id = auth()->id();
        $data->listing_owner_id = $listing->user_id;
        $data->listing_id = $request->listing_id;
        $data->email = $request->email;
        $data->details = $request->details;
        $data->save();

        return back()->with('message', 'Thank you for contacting us! We will get back to you soon');
    }

    public function wishlist(Request $request)
    {
        if (auth()->user() == NULL) {
            return response()->json(['error' => 'Please login first!']);
        }

        if (Wishlists::whereUserId(auth()->id())->whereListingId($request->listing_id)->exists()) {
            $wishlist = Wishlists::whereUserId(auth()->id())->whereListingId($request->listing_id)->first();
            $wishlist->delete();
            return response()->json(['error' => 'Directory remove from favourite list']);
        }

        $wishlist = new Wishlists();
        $wishlist->user_id = auth()->id();
        $wishlist->listing_id = $request->listing_id;
        $wishlist->save();

        return response()->json(['success' => 'Property added into your favourite list.']);
    }

    public function review(Request $request)
    {
        $request->validate([
            'rate' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        if (auth()->user() == NULL) {
            return back()->with('warning', 'Please login first!');
        }

        if (Listing::whereUserId(auth()->id())->whereId($request->listing_id)->exists()) {
            return back()->with('warning', 'You are not allow to give review own directory!');
        }

        if (ListingReview::whereUserId(auth()->id())->whereListingId($request->listing_id)->exists()) {
            return back()->with('warning', 'you have given review already!');
        }

        if (!User::whereId(auth()->id())->exists()) {
            return back()->with('warning', 'Please login first!');
        }

        $listing = Listing::whereId($request->listing_id)->first();

        $review = new ListingReview();
        $review->user_id = auth()->id();
        $review->listing_owner_id = $listing->user_id;
        $review->listing_id = $request->listing_id;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->message = $request->message;
        $review->rate = $request->rate;
        $review->save();

        return back()->with('message', 'Data submitted for admin to review.');
    }

    public function follow(Request $request)
    {
        if (auth()->user() == NULL) {
            return response()->json(['error' => 'Please login first!']);
        }

        if ($request->has('listing_id')) {
            if (Listing::whereId($request->listing_id)->whereUserId(auth()->id())->exists()) {
                return response()->json(['error' => 'You can not follow yourself!']);
            }
        }

        if (Follower::whereFollowerId(auth()->id())->exists()) {
            return response()->json(['error' => 'You already follow this owner!!']);
        }

        $data = new Follower();
        $data->user_id = $request->has('owner_id') ? $request->owner_id : null;
        $data->follower_id = auth()->id();
        $data->save();

        return response()->json(['success' => 'Property added into your favourite list.']);
    }
}
