<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Listing;
use App\Models\Appadds;
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
        DB::enableQueryLog();
        $categories = $request->category ? $request->category[0] : null;
        $locations = $request->location ? $request->location[0] : null;
        $types = $request->type ? $request->type[0] : null;
        $real_address = $request->real_address ? $request->real_address : null;

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
        // dd($queries);

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
                'id' => $user->id,
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

    public function change_password(Request $request, $user_id)
    {

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Retrieve the authenticated user
        $user = User::where('id', $user_id)->first();

        // Check if the current password matches the user's password
        if (!Hash::check($request->input('old_password'), $user->password)) {
            return response()->json(['result' => 'Current password is incorrect'], 401);
        }

        // Update the user's password
        $user->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return response()->json(['status' => true, 'result' => 'Password changed successfully', 'user' => $user]);
    }



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


    public function edituser(Request $request, $user_id)
    {
        //dd($user_id);
        $user = User::where('id', $user_id)->first();
        if ($user) {
            return  json_encode(['status' => true, 'userprifiledata' => $user, 'result' => 'User Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'User Data Not Found']);
        }
    }


    public function userprofile(Request $request, $user_id)
    {
        //dd($user_id);
        $user = User::where('id', $user_id)->first();
        if ($user) {
            return  json_encode(['status' => true, 'userprifiledata' => $user, 'result' => 'User Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'User Data Not Found']);
        }
    }



    public function postreview(Request $request)
    {
        $request->validate([
            'rate' => 'required|numeric|min:1|max:5',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Set the user ID based on the request or fall back to authenticated user ID
        $user_id = $request->user_id ?? auth()->id();
        // Retrieve the listing
        $listing = Listing::find($request->listing_id);

        // Check if the listing exists
        if (!$listing) {
            return response(['result' => 'Listing not found!', 'status' => false], 404);
        }

        // Check if the user has already given a review for the same listing
        if (ListingReview::whereUserId($user_id)->whereListingId($request->listing_id)->exists()) {
            return response(['result' => 'You have already given a review for this listing!', 'status' => false], 400);
        }



        // Create a new review
        $review = new ListingReview();
        $review->user_id = $user_id;
        $review->listing_owner_id = $listing->user_id;
        $review->listing_id = $request->listing_id;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->message = $request->message;
        $review->rate = $request->rate;

        // Save the review
        if ($review->save()) {
            return response(['result' => 'Post Review Success', 'status' => true], 200);
        } else {
            return response(['result' => 'Something Wrong', 'status' => false], 500);
        }
    }








    public function updateuser(Request $request, $user_id)
    {
        $user = User::where('id', $user_id)->first();
        $rules = [
            //'photo' => 'mimes:jpeg,jpg,png,svg',
            'email' => 'unique:users,email,' . $user->id,
            'name'     => 'required',
            'phone' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $user = User::findOrFail($user_id);
        $data = $request->all();
        if ($file = $request->file('photo')) {
            $name = Str::random(8) . time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/images', $name);
            if ($user->photo != null) {
                if (file_exists(public_path() . '/assets/images/' . $user->photo)) {
                    unlink(public_path() . '/assets/images/' . $user->photo);
                }
            }
            $data['photo'] = $name;
        }
        $user->update($data);
        return  json_encode(['status' => true, 'result' => 'User Information Updated Successfully']);
    }



    public function deleteUser(Request $request, $userId)
    {
        // Find the user by ID
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['result' => 'User not found']);
        }

        $user->update([
            'email' => '',

        ]);

        return response()->json(['status' => true, 'result' => 'User is_active status updated successfully', 'user' => $user]);
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

    public function allproduct_slug(Request $request, $slug = '')
    {
        if ($slug != '') {
            $categoriesub = Category::where('slug', $slug)->get();
            foreach ($categoriesub as $key => $categoriesubIDp) {
                $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id);
                $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
                    ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'listings.category_id', 'listings.id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
                    ->groupBy('listings.id', 'listings.name', 'listings.photo', 'listings.highlight_type', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'listings.category_id', 'listings.id');
            }
        } else {
            $allproduct_query = DB::table('listings');
            $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
                ->leftJoin('categories', 'listings.category_id', '=', 'categories.id')
                ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'categories.title', 'listings.category_id', 'listings.id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
                ->groupBy('listings.id', 'listings.name', 'listings.photo', 'listings.highlight_type', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'categories.title', 'listings.category_id', 'listings.id');
            if ($request->keyword) {
                $allproduct_query->where('listings.name', 'LIKE', "%$request->keyword%");
            }
            if ($request->highlight) {
                $allproduct_query->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
            }
            if ($request->catname) {
                $allproduct_query->where('categories.title', 'LIKE', "%$request->catname%");
            }

            if ($request->category) {
                $allproduct_query->where('listings.category_id', 'LIKE', "%$request->category%");
            }

            if ($request->category && $request->highlight) {
                $allproduct_query->where(function ($query) use ($request) {
                    $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
                });
            }

            if ($request->category && $request->feature) {
                $allproduct_query->where(function ($query) use ($request) {
                    $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.is_feature', 'LIKE', "%$request->feature%");
                });
            }
        }

        $allproduct = $allproduct_query->get();

        if ($allproduct->isNotEmpty()) {
            return json_encode(['status' => true, 'listing' => $allproduct, 'result' => 'Data Found']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }




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


    public function cms_contant(Request $request, $slug)
    {
        if ($slug != '') {
            $data['page'] =  DB::table('pages')->where('slug', $slug)->first();
            return  json_encode(['status' => true, 'pages' => $data['page'], 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
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
            return  json_encode(['status' => true, 'lishting_id' => $data->id, 'description' => $data->description, 'Rating' => $data->directoryRatting($data->id), 'ProductName' => $data->name, 'type' => $data->type, 'OpenCloseTime' => $data->openClose($data->id), 'Amenities' => $data['amenities'], 'Faqs' => $data['faq'], 'galleries' => $data->galleries, 'Review' => $data['reviews'], 'latitude' => $data->latitude, 'longitude' => $data->longitude, 'schedules' => $data['schedules'], 'ReviewRatting' => $averageRating, 'result' => 'Data Found']);
            //return view('frontend.details',$data);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
        return view('errors.404');
    }



    public function wishlistapi(Request $request, $user_id)
    {
        $wishlists = DB::table('wishlists')->select('*')->where('user_id', $user_id)->get();
        $allProducts = [];

        foreach ($wishlists as $value) {
            $listing = DB::table('listings')->select('*')->where('status', 1)->where('id', $value->listing_id)->first();

            if ($listing) {
                $categorysss = $listing->category_id;
                $categoriesub = Category::where('id', $categorysss)->get();

                foreach ($categoriesub as $categoriesubname) {
                    $categoryName = $categoriesubname->slug;
                    $categorytitle = $categoriesubname->title;
                    $categoryid = $categoriesubname->id;
                }

                // Example data fetching logic (replace this with your actual logic)
                $data = Listing::whereSlug($listing->slug)->whereStatus(1)->first();

                if ($data) {
                    $reviews       = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
                    $totalRate = $reviews->sum('rate');

                    $listingData = [
                        'id' => $data->id,
                        'name' => $data->name,
                        'photo' => $data->photo,
                        'is_feature' => $listing->is_feature == 1 ? 'FEATURED' : '',
                        'schedules' => $listing->schedules ? json_decode($listing->schedules, true) : [],
                        'slug' => $data->slug,
                        'real_address' => $data->real_address,
                        'phone_number' => $data->phone_number,
                        'title' => $categorytitle,
                        'category_id' => $categoryid,
                        'total_reviews' => $totlalreviews,
                        'CatName' => $categoryName,
                        'total_rating' => $totalRate,
                        'openCloseTime' => $data->openClose($data->id),
                    ];

                    $allProducts[] = $listingData; // Add the listing data to $allProducts
                }
            }
        }

        $count = count($allProducts); // Count the number of items in $allProducts

        if ($count > 0) {
            return response()->json(['status' => true, 'wishlistListings' => $allProducts, 'success' => 'Data Found.']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }




    public function contactmailapi(Request $request)
    {
        $ps = DB::table('pagesettings')->where('id', '=', 1)->first();
        $subject = $request->subject;
        $gs = Generalsetting::findOrFail(1);
        $to = $request->to;
        $fname = $request->firstname;
        $lname = $request->lastname;
        $from = $request->email;
        $msg = "First Name: " . $fname . "\nLast Name: " . $lname . "\nEmail: " . $from . "\nMessage: " . $request->message;

        if ($gs->is_smtp) {
            $data = [
                'to' => $to,
                'subject' => $subject,
                'body' => $msg,
            ];

            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($data);
        } else {
            $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
            mail($to, $subject, $msg, $headers);
        }

        return response()->json($ps->contact_success);
    }



    public function wishlistpostapi(Request $request)
    {
        //////dd($request);

        //         if (!auth()->check()) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }


        if (Wishlists::where('user_id', auth()->id())->where('listing_id', $request->listing_id)->exists()) {
            $wishlist = Wishlists::where('user_id', auth()->id())->where('listing_id', $request->listing_id)->first();
            $wishlist->delete();
            return response()->json(['error' => 'Product already added into your favourite list.']);
        }

        $wishlist = new Wishlists();
        //$token = md5(time().$request->name.$request->email);
        $wishlist->user_id = auth()->id();
        $wishlist->listing_id = $request->listing_id;
        $wishlist->save();
        return response()->json(['success' => 'Product added into your favourite list.']);
    }



    public function removewishlistpostapi(Request $request)
    {
        //////dd($request);

        //         if (!auth()->check()) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }


        if (Wishlists::where('user_id', auth()->id())->where('listing_id', $request->listing_id)->exists()) {
            $wishlist = Wishlists::where('user_id', auth()->id())->where('listing_id', $request->listing_id)->first();
            $wishlist->delete();
            return response()->json(['error' => 'Product Deleted into your favourite list.']);
        }
        return response()->json(['success' => 'First you add the product into favourite list.']);
    }


    public function search_filter(Request $request, $keybord)
    {
        $data = Listing::where('name', 'like', '%' . $keybord . '%')->get();
        $count = $data->count();
        if ($count > 0) {
            return response()->json(['status' => true, 'FilterListing' => $data, 'result' => 'Data Found']);
        } else {
            return response()->json(['status' => false, 'result' => 'Data Not Found.']);
        }
    }


    public function filter_highlight_type(Request $request, $highlight_type)
    {
        $data = Listing::where('highlight_type', $highlight_type)->get();
        $count = $data->count();
        if ($count > 0) {
            return response()->json(['status' => true, 'FilterListing' => $data, 'result' => 'Data Found']);
        } else {
            return response()->json(['status' => false, 'result' => 'Data Not Found.']);
        }
    }


    public function appaddsdata(Request $request)
    {
        $data = DB::table('appadds')->select('*')->get();
        $count = $data->count();
        if ($count > 0) {

            return response()->json(['status' => true, 'AppaddsData' => $data, 'result' => 'Data Found']);
        } else {

            return response()->json(['status' => false, 'result' => 'Data Not Found.']);
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



    public function search_api(Request $request, $slug = '')
    {
        if ($slug != '') {
            $categoriesub = Category::where('slug', $slug)->get();
            foreach ($categoriesub as $key => $categoriesubIDp) {
                $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id);
                $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
                    ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'listings.category_id', 'listings.id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
                    ->groupBy('listings.id', 'listings.name', 'listings.photo', 'listings.highlight_type', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'listings.category_id', 'listings.id');
            }
        } else {
            $allproduct_query = DB::table('listings');
            $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
                ->leftJoin('categories', 'listings.category_id', '=', 'categories.id')
                ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'categories.title', 'listings.category_id', 'listings.id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
                ->groupBy('listings.id', 'listings.name', 'listings.photo', 'listings.highlight_type', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'categories.title', 'listings.category_id', 'listings.id');

            if ($request->keyword) {
                $allproduct_query->where('listings.name', 'LIKE', "%$request->keyword%");
            }
            if ($request->highlight) {
                $allproduct_query->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
            }
            if ($request->type) {
                $allproduct_query->where('listings.type', 'LIKE', "%$request->type%");
            }

            if ($request->category) {
                $allproduct_query->where('listings.category_id', 'LIKE', "%$request->category%");
            }

            if ($request->category && $request->type) {
                $allproduct_query->where(function ($query) use ($request) {
                    $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.type', 'LIKE', "%$request->type%");
                });
            }

            if ($request->category && $request->feature) {
                $allproduct_query->where(function ($query) use ($request) {
                    $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.is_feature', 'LIKE', "%$request->feature%");
                });
            }
        }

        $allproduct = $allproduct_query->get();

        if ($allproduct->isNotEmpty()) {
            return json_encode(['status' => true, 'listing' => $allproduct, 'result' => 'Data Found']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
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



    public function filterAllProduct(Request $request)
    {

        $type    = $request->input('type');
        $keyword = $request->input('keyword');
        $slug    = $request->input('slug');
        $product_data = $request->input('product_data');

        $listingsData = [];

        if ($slug != '') {
            $categoriesub = Category::where('slug', $slug)->get();
            foreach ($categoriesub as $key => $categoriesubIDp) {
                $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id)->get();
                // Process $allproduct_query to populate $listingsData for this condition
                foreach ($allproduct_query as $listing) {
                    $categoryName = $categoriesubIDp->slug; // Get category slug for this specific condition

                    $categorysss = $listing->category_id;

                    $categoriesub = Category::where('id', $categorysss)->get();
                    foreach ($categoriesub as $categoriesubname) {
                        $categoryName = $categoriesubname->slug;
                        $categorytitle = $categoriesubname->title;
                        $categoryid = $categoriesubname->id;
                    }

                    // Example data fetching logic (replace this with your actual logic)
                    $data = Listing::whereSlug($listing->slug)->whereStatus(1)->first();
                    if ($data) {
                        $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                        $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
                        $totalRate = $reviews->sum('rate');

                        $listingData = [
                            'id' => $data->id,
                            'name' => $data->name,
                            'photo' => $data->photo,
                            'is_feature' => $listing->is_feature == 1 ? 'FEATURED' : '',
                            'schedules' => $listing->schedules ? json_decode($listing->schedules, true) : [],
                            'slug' => $data->slug,
                            'real_address' => $data->real_address,
                            'phone_number' => $data->phone_number,
                            'title'        => $categorytitle,
                            'category_id'  => $categoryid,
                            'total_reviews' => $totlalreviews,
                            'CatName' => $categoryName,
                            'total_rating' => $totalRate,
                            'openCloseTime' => $data->openClose($data->id),
                        ];

                        $listingsData[] = $listingData;
                    }
                }
            }
        } else if ($product_data != '') {
            $allproduct_query = DB::table('listings')->where('type', 'LIKE', "%$product_data%")->get();

            foreach ($allproduct_query as $listing) {
                $categorysss = $listing->category_id;
                $categoriesub = Category::where('id', $categorysss)->get();
                foreach ($categoriesub as $categoriesubname) {
                    $categoryName = $categoriesubname->slug;
                    $categorytitle = $categoriesubname->title;
                    $categoryid = $categoriesubname->id;
                }
                // Example data fetching logic (replace this with your actual logic)
                $data = Listing::whereSlug($listing->slug)->whereStatus(1)->first();
                if ($data) {
                    $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
                    $totalRate = $reviews->sum('rate');

                    $listingData = [
                        'id' => $data->id,
                        'name' => $data->name,
                        'photo' => $data->photo,
                        'is_feature' => $listing->is_feature == 1 ? 'FEATURED' : '',
                        'schedules' => $listing->schedules ? json_decode($listing->schedules, true) : [],
                        'slug' => $data->slug,
                        'real_address' => $data->real_address,
                        'phone_number' => $data->phone_number,
                        'title'        => $categorytitle,
                        'category_id'  => $categoryid,
                        'total_reviews' => $totlalreviews,
                        'CatName' => $categoryName,
                        'total_rating' => $totalRate,
                        'openCloseTime' => $data->openClose($data->id),
                    ];

                    $listingsData[] = $listingData;
                }
            }
        } else {
            $allproduct_query_p = DB::table('categories')
                ->where('title', 'LIKE', "%$keyword%")
                ->whereNull('parent_id')
                // ->get();
                ->pluck('id')
                ->toArray(); // Convert the collection to an array of ids
            // dd($allproduct_query_p);
            $listingsData = []; // Initialize listingsData outside the loop

            if (!empty($allproduct_query_p)) {
                foreach ($allproduct_query_p as $cat_id) {

                    $allproduct_query = DB::table('categories')->where('id', $cat_id)
                        // ->orWhere('parent_id', $cat_id)
                        ->get();
                    // dd($allproduct_query);
                    foreach ($allproduct_query as $categoriesubIDp) {
                        $listingData = [
                            'id'    => $categoriesubIDp->id,
                            'title' => $categoriesubIDp->title,
                            'slug'  => $categoriesubIDp->slug,
                            'photo' => $categoriesubIDp->photo,
                        ];

                        $listingsData[] = $listingData;
                    }
                }
            } else {
                // Handle case when $allproduct_query_p is empty
                // For example, you might want to add a default message or behavior
                // For now, adding an empty array as an example
                $listingsData = [];
            }
        }

        $count = count($listingsData);

        return response()->json([
            'status' => $count > 0,
            'allproduct' => $listingsData,
            'result' => $count > 0 ? 'Data Found' : 'Data Not Found',
        ]);
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
