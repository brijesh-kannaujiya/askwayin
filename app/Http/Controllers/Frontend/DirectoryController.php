<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Listing;
use App\Models\Appadds;
use App\Models\Device;
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
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{

    public function listing(Request $request)
    {
        DB::enableQueryLog();
        $categories = $request->category ? $request->category[0] : null;
        $locations = $request->location ? $request->location[0] : null;
        $types = $request->type ? $request->type[0] : null;
        $real_address = $request->real_address ? $request->real_address : null;
        // dd($categories, $locations, $types, $real_address);
        $data['categories'] = Category::whereIsTop(1)->orderBy('id', 'desc')->get();
        $data['locations'] = Location::whereStatus(1)->orderBy('id', 'desc')->get();
        $data['listings'] = Listing::when($categories, function ($query, $categories) use ($real_address) {
            $categories = explode(",", $categories);
            foreach ($categories as $key => $category) {
                $cat = Category::whereSlug($category)->first();
                if ($key == 0) {
                    if ($cat != null) {
                        $query->where('category_id', $cat->id)->where('real_address', 'LIKE', "%$real_address%");
                    }
                } else {
                    if ($cat != null) {
                        $query->orWhere('category_id', $cat->id);
                    }
                }
            }
            return $query;
        })
            ->when($locations, function ($query, $locations) {
                $locations = explode(",", $locations);
                $query->whereIn('location_id', $locations);
                return $query;
            })
            ->when($types, function ($query, $types) {
                $types = explode(",", $types);
                $query->whereIn('type', $types);
                return $query;
            })
            ->when($real_address, function ($query) use ($real_address) {
                $query->where('real_address', 'LIKE', "%$real_address%");
            })
            ->when($types, function ($query) use ($types) {
                $query->where('type', 'LIKE', "%$types%");
            })
            ->whereStatus(1)
            ->orderBy('id', 'desc')
            ->paginate(12);

        // Get the executed queries
        $queries = DB::getQueryLog();
        // Disable query logging to prevent further queries from being added to the log
        DB::disableQueryLog();
        // Print the queries (for debugging purposes)
        dd($data['listings']);
        if ($request->ajax()) {
            return view('partials.front.listing', $data);
        }

        return view('frontend.list', $data);
    }

    public function filter(Request $request)
    {
        $is_verify = $request->is_verify ? $request->is_verify[0] : null;
        $highlight_type = $request->highlight_type ? $request->highlight_type[0] : null;
        $categories = $request->category ? $request->category[0] : null;
        $locations = $request->location ? $request->location[0] : null;
        $types = $request->type ? $request->type[0] : null;
        $real_address = $request->real_address ? $request->real_address : null;
        // $category = $request->category ? $request->category : null;

        // dd($request->all());
        // dd($highlight_type);
        $data['categories'] = Category::whereIsTop(1)->orderBy('id', 'desc')->get();
        // dd($data);
        $data['locations']  = Location::whereStatus(1)->orderBy('id', 'desc')->get();

        $data['listings'] = Listing::when($categories, function ($query, $categories) {
            $categories = explode(",", $categories);
            // dd($categories);
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
            ->when($is_verify, function ($q) use ($is_verify) {
                return $q->where('is_verify', 'LIKE', "%$is_verify%");
            })
            ->when($highlight_type, function ($q) use ($highlight_type) {
                return $q->where('highlight_type', 'LIKE', "%$highlight_type%");
            })
            ->whereStatus(1)
            ->orderBy('id', 'desc')
            ->paginate(12);
        // dd($data['listings']);
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






    // $request->validate([
    //     'password' => 'required|confirmed',
    // ]);
    // $loggeduser = auth()->user();
    // $loggeduser->password = Hash::make($request->password);
    // $loggeduser->save();
    // return response([
    //     'message' => 'Password Changed Successfully',
    //     'status'=>'success'
    // ], 200);
    //  }

























    //     public function allproduct_by_slug(Request $request,$slug)
    //     {

    //       $categoriesub = Category::where('slug',$slug)->get();
    //          foreach($categoriesub as $key=>$categoriesubIDp){
    //         $allproduct   = DB::table('listings')->where('status', 1)->where('category_id', $categoriesubIDp->id)->get();

    //   }

    //      if($allproduct){
    //      return json_encode(['status' => true, 'lishting' =>$allproduct, 'result' => 'Data Found']);
    //      } else {
    //     return json_encode(['status' => false, 'result' => 'Data Not Found']);
    //      }
    //     }





    // public function search_api(Request $request, $slug='')
    // {       


    //         $categoriesub = Category::where('slug', $slug)->get();
    //         foreach ($categoriesub as $key => $categoriesubIDp) {
    //             $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id);
    //             $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
    //         ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature','listings.schedules', 'listings.slug','listings.real_address','listings.phone_number','listings.category_id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
    //         ->groupBy('listings.id', 'listings.name', 'listings.photo','listings.highlight_type','listings.is_feature','listings.schedules','listings.slug','listings.real_address','listings.phone_number','listings.category_id');
    //         }

    //         if ($request->keyword) {
    //             $allproduct_query->where('listings.name', 'LIKE', "%$request->keyword%");
    //         }
    //         if ($request->highlight) {
    //             $allproduct_query->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
    //         }
    //         if ($request->catname) {
    //             $allproduct_query->where('categories.title', 'LIKE', "%$request->catname%");
    //         }

    //         if ($request->category) {
    //         $allproduct_query->where('listings.category_id', 'LIKE', "%$request->category%");
    //         }

    //         if ($slug && $request->highlight) {
    //         $allproduct_query->where(function($query) use ($request) {
    //         $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
    //         });
    //         }


    //     $allproduct = $allproduct_query->get();

    //     if ($allproduct->isNotEmpty()) {
    //         return json_encode(['status' => true, 'listing' => $allproduct, 'result' => 'Data Found']);
    //     } else {
    //         return json_encode(['status' => false, 'result' => 'Data Not Found']);
    //     }
    // }





    //   public function allproduct_slug(Request $request, $slug='', $keyword='')
    //     {
    //     if($slug!='' && $keyword==''){
    //       // dd('mmmmmmmmm');
    //     $categoriesub = Category::where('slug',$slug)->get();
    //     foreach($categoriesub as $key=>$categoriesubIDp){
    //     $allproduct   = DB::table('listings')->where('status', 1)->where('category_id', $categoriesubIDp->id)->get();
    //     foreach($allproduct as $key=>$allproduct_ss){
    //         $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
    //          $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
    //          $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
    //          $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules,true) : [];
    //          $is_feature = $allproduct_ss->is_feature;
    //          if($is_feature==1){
    //              $is_feature='FEATURED';
    //          }
    //          $OpenCloseTime = $data->openClose($data->id);
    //          $ratingcount = $data->directoryRatting($data->id);
    //          //dd($OpenCloseTime);

    //      }
    //     }
    //     }
    //     else if($keyword!='' && $slug=='')
    //     {
    //      // dd('tyyyyyyyyyyyyyyyy'); 
    //      $allproduct   = DB::table('listings')->where('status', 1)->where('name', 'like', '%'.$keyword.'%')->get();  
    //      foreach($allproduct as $key=>$allproduct_ss){
    //          $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
    //          $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
    //          $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
    //          $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules,true) : [];
    //          $is_feature = $allproduct_ss->is_feature;
    //          if($is_feature==1){
    //              $is_feature='FEATURED';
    //          }

    //          $OpenCloseTime = $data->openClose($data->id);
    //          $ratingcount = $data->directoryRatting($data->id);
    //          //dd($data->openClose($data->id));

    //      }
    //     }
    //     else
    //     {
    //       // dd('yyyyyhgggggggggggggg');
    //      $allproduct   = DB::table('listings')->where('status', 1)->get();  
    //      foreach($allproduct as $key=>$allproduct_ss){
    //          $categorieName = DB::select("SELECT title FROM categories where id='$allproduct_ss->category_id'");
    //          $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();
    //          $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
    //          $data['schedules'] = $allproduct_ss->schedules != NULL ? json_decode($allproduct_ss->schedules,true) : [];
    //          $is_feature = $allproduct_ss->is_feature;
    //          if($is_feature==1){
    //              $is_feature='FEATURED';
    //          }

    //          $OpenCloseTime = $data->openClose($data->id);
    //          $ratingcount = $data->directoryRatting($data->id);
    //          //dd($data->openClose($data->id));

    //      }
    //     }

    //         return json_encode(['status' => true, 'lishting' =>$allproduct, 'CatName'=>$categorieName, 'is_feature'=>$is_feature, 'OpenCloseTime'=>$OpenCloseTime, 'Review'=>$data['reviews'],'Ratting'=>$ratingcount, 'result' => 'Data Found']);
    //     // } else {
    //     //     return json_encode(['status' => false, 'result' => 'Data Not Found']);
    //     // }
    //     }



    public function allproduct(Request $request, $keyword = '')
    {
        //dd($keyword);
        if ($keyword != '') {
            // dd('54534534');
            $allproduct = DB::table('listings')->where('status', 1)->where('name', 'like', '%' . $keyword . '%')->get();
            $listingsData = [];

            foreach ($allproduct as $key => $allproduct_ss) {
                // Fetch category name using Eloquent instead of a raw query
                $categoryName = DB::table('categories')->where('id', $allproduct_ss->category_id)->value('title');

                // Fetch listing details using Eloquent
                $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();

                // Check if a listing is found
                if ($data) {
                    // Fetch reviews using Eloquent
                    $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $total_rate = 0;
                    foreach ($reviews as $rate) {
                        $total_rate += $rate->rate;
                    }
                    // Additional details for the listing
                    $listingData = [
                        'id' => $data->id,
                        'name' => $data->name,
                        'photo' => $data->photo,
                        'CatName' => $categoryName,
                        'Review' => $reviews,
                        'Rate' => $total_rate,
                        'schedules' => $allproduct_ss->schedules != null ? json_decode($allproduct_ss->schedules, true) : [],
                        'is_feature' => $allproduct_ss->is_feature == 1 ? 'FEATURED' : '',
                        'openCloseTime' => $data->openClose($data->id), // Assuming openClose is a method in the Listing model
                    ];

                    $listingsData[] = $listingData;
                }
            }
        } else {
            $allproduct = DB::table('listings')->where('status', 1)->get();
            $listingsData = [];
            //dd('rrrrrrrrrrrrrrr');
            foreach ($allproduct as $key => $allproduct_ss) {
                // Fetch category name using Eloquent instead of a raw query
                $categoryName = DB::table('categories')->where('id', $allproduct_ss->category_id)->value('title');

                // Fetch listing details using Eloquent
                $data = Listing::whereSlug($allproduct_ss->slug)->whereStatus(1)->first();

                // Check if a listing is found
                if ($data) {
                    // Fetch reviews using Eloquent
                    $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $total_rate = 0;
                    foreach ($reviews as $rate) {
                        $total_rate += $rate->rate;
                    }
                    // Additional details for the listing
                    $listingData = [
                        'id' => $data->id,
                        'name' => $data->name,
                        'photo' => $data->photo,
                        'CatName' => $categoryName,
                        'Review' => $reviews,
                        'Rate' => $total_rate,
                        'schedules' => $allproduct_ss->schedules != null ? json_decode($allproduct_ss->schedules, true) : [],
                        'is_feature' => $allproduct_ss->is_feature == 1 ? 'FEATURED' : '',
                        'openCloseTime' => $data->openClose($data->id), // Assuming openClose is a method in the Listing model
                    ];

                    $listingsData[] = $listingData;
                }
            }

            $count = count($listingsData);

            if ($count > 0) {
                return json_encode(['status' => true, 'allproduct' => $listingsData, 'result' => 'Data Found']);
            } else {
                return json_encode(['status' => false, 'result' => 'Data Not Found']);
            }
        }
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
            $catdata = Category::where('slug', 'like', '%' . $request->slug . '%')->get();
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
        $data['reviews'] = ListingReview::with('user')->whereListingId($data->id)->whereStatus(1)->paginate(3);
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

    public function map(Request $request)
    {

        return view('map');
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
        //$token = md5(time().$request->name.$request->email);
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









    public function DeviceToken(Request $request)
    {
        $data = $request->validate([
            'device_id' => 'required',
            'language' => 'required', // Add other columns as needed
        ]);

        // Use updateOrCreate to update or create the device
        $device = Device::updateOrCreate([
            'device_id'   => $data['device_id'],
        ], [
            'language'     => $data['language'],
        ]);


        return response()->json(['message' => 'Device updated or created successfully', 'data' => $device]);
    }

    // public function filterAllProduct(Request $request)
    // {

    // $type    = $request->input('type');
    // $keyword = $request->input('keyword');
    // $slug    = $request->input('slug');

    // $listingsData = [];

    // if ($slug != '') {
    //     $categoriesub = Category::where('slug', $slug)->get();
    //     foreach ($categoriesub as $key => $categoriesubIDp) {
    //         $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id)->get();
    //         // Process $allproduct_query to populate $listingsData for this condition
    //         foreach ($allproduct_query as $listing) {
    //             $categoryName = $categoriesubIDp->slug; // Get category slug for this specific condition

    //              $categorysss = $listing->category_id; 

    //             $categoriesub = Category::where('id', $categorysss)->get();
    //             foreach ($categoriesub as $categoriesubname) {
    //             $categoryName = $categoriesubname->slug;
    //             $categorytitle = $categoriesubname->title;
    //             $categoryid = $categoriesubname->id;
    //             }

    //             // Example data fetching logic (replace this with your actual logic)
    //             $data = Listing::whereSlug($listing->slug)->whereStatus(1)->first();
    //             if ($data) {
    //                 $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
    //                 $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
    //                 $totalRate = $reviews->sum('rate');

    //                 $listingData = [
    //                     'id' => $data->id,
    //                     'name' => $data->name,
    //                     'photo' => $data->photo,
    //                     'is_feature' => $listing->is_feature == 1 ? 'FEATURED' : '',
    //                     'schedules' => $listing->schedules ? json_decode($listing->schedules, true) : [],
    //                     'slug' => $data->slug,
    //                     'real_address' => $data->real_address,
    //                     'phone_number' => $data->phone_number,
    //                     'title'        =>$categorytitle,
    //                     'category_id'  =>$categoryid,
    //                     'total_reviews' => $totlalreviews,
    //                     'CatName' => $categoryName,
    //                     'total_rating' => $totalRate,
    //                     'openCloseTime' => $data->openClose($data->id),
    //                 ];

    //                 $listingsData[] = $listingData;
    //             }
    //         }
    //     }
    // } else {
    //     $allproduct_query = DB::table('listings')->where('type', 'LIKE', "%$keyword%")->get();

    //         foreach ($allproduct_query as $listing) {
    //             $categorysss = $listing->category_id; 

    //             $categoriesub = Category::where('id', $categorysss)->get();
    //             foreach ($categoriesub as $categoriesubname) {
    //             $categoryName = $categoriesubname->slug;
    //             $categorytitle = $categoriesubname->title;
    //             $categoryid = $categoriesubname->id;
    //             }
    //             // Example data fetching logic (replace this with your actual logic)
    //             $data = Listing::whereSlug($listing->slug)->whereStatus(1)->first();
    //             if ($data) {
    //                 $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
    //                 $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
    //                 $totalRate = $reviews->sum('rate');

    //                 $listingData = [
    //                     'id' => $data->id,
    //                     'name' => $data->name,
    //                     'photo' => $data->photo,
    //                     'is_feature' => $listing->is_feature == 1 ? 'FEATURED' : '',
    //                     'schedules' => $listing->schedules ? json_decode($listing->schedules, true) : [],
    //                     'slug' => $data->slug,
    //                     'real_address' => $data->real_address,
    //                     'phone_number' => $data->phone_number,
    //                     'title'        =>$categorytitle,
    //                     'category_id'  =>$categoryid,
    //                     'total_reviews' => $totlalreviews,
    //                     'CatName' => $categoryName,
    //                     'total_rating' => $totalRate,
    //                     'openCloseTime' => $data->openClose($data->id),
    //                 ];

    //                 $listingsData[] = $listingData;
    //             }
    //         }

    // }

    // $count = count($listingsData);

    // return response()->json([
    //     'status' => $count > 0,
    //     'allproduct' => $listingsData,
    //     'result' => $count > 0 ? 'Data Found' : 'Data Not Found',
    // ]);
    // }



    // public function filterAllProduct(Request $request)
    // {
    //     $type = $request->input('type');
    //     $keyword = $request->input('keyword');
    //     $slug = $request->input('slug');

    //     if ($slug != '') {
    //         $categoriesub = Category::where('slug', $slug)->get();
    //         foreach ($categoriesub as $key => $categoriesubIDp) {
    //             $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id);
    //             $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
    //         ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature','listings.schedules', 'listings.slug','listings.real_address','listings.phone_number','listings.category_id','listings.id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
    //         ->groupBy('listings.id', 'listings.name', 'listings.photo','listings.highlight_type','listings.is_feature','listings.schedules','listings.slug','listings.real_address','listings.phone_number','listings.category_id','listings.id');
    //         }
    //     } else {
    //         $allproduct_query = DB::table('listings');
    //         $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
    //         ->leftJoin('categories', 'listings.category_id', '=', 'categories.id')
    //         ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature','listings.schedules', 'listings.slug','listings.real_address','listings.phone_number','categories.title','listings.category_id','listings.id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
    //         ->groupBy('listings.id', 'listings.name', 'listings.photo','listings.highlight_type','listings.is_feature','listings.schedules','listings.slug','listings.real_address','listings.phone_number','categories.title','listings.category_id','listings.id');

    //         if ($request->keyword) {
    //             $allproduct_query->where('listings.type', 'LIKE', "%$request->keyword%");
    //         }
    //         if ($request->highlight) {
    //             $allproduct_query->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
    //         }
    //         if ($request->slug) {
    //             $allproduct_query->where('categories.slug', 'LIKE', "%$request->slug%");
    //         }

    //         if ($request->category) {
    //         $allproduct_query->where('listings.category_id', 'LIKE', "%$request->category%");
    //         }

    //         if ($request->category && $request->highlight) {
    //         $allproduct_query->where(function($query) use ($request) {
    //         $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
    //         });
    //         }

    //         if ($request->category && $request->feature) {
    //         $allproduct_query->where(function($query) use ($request) {
    //         $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.is_feature', 'LIKE', "%$request->feature%");
    //         });
    //         }
    //     }



    //     $allproduct = $allproduct_query->get();
    //   dd($allproduct);
    //   $is_feature =  $allproduct_query->is_feature == 1 ? 'FEATURED' : '';
    //   $openCloseTime = $allproduct_query->openClose($allproduct_query->id);
    //   dd($is_feature);

    //     if ($allproduct->isNotEmpty()) {
    //         return json_encode(['status' => true, 'listing' => $allproduct, 'result' => 'Data Found']);
    //     } else {
    //         return json_encode(['status' => false, 'result' => 'Data Not Found']);
    //     }
    // }






















}
