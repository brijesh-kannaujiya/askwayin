<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Listing;
use App\Models\ListingFaq;
use App\Models\ListingReview;
use App\Models\RecentViewsListing;
use App\Models\Wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
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


    public function product_detail($slug)
    {

        $data = Listing::whereSlug($slug)->whereStatus(1)->first();
        $data['amenities'] = $data->amenities != NULL ? json_decode($data->amenities, true) : [];
        $data['schedules'] = $data->schedules != NULL ? json_decode($data->schedules, true) : [];
        $data['reviews'] = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
        $data['faq'] = ListingFaq::whereListingId($data->id)->get();
        $data['data'] = $data;
        $is_verify = $data['is_verify'] ? 'VERIFYED' : '';
        $is_toprated = $data['is_toprated'] ? 'TOPRATED' : '';
        $is_feature = $data['is_feature'] ? 'FEATURED' : '';
        $datadd = Listing::where('slug', $slug)->get();
        foreach ($datadd as $key => $datareview) {
            $listing_reviews   = DB::table('listing_reviews')->where('listing_id', $datareview->id)->get();
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

        if (auth()->user()) {
            $this->recentViews($data->id, $data->user_id);
            $data['recentViews'] = RecentViewsListing::whereNotIn('listing_id', [$data->id])->whereUserId(auth()->id())->orderBy('id', 'desc')->limit(4)->get();
        }

        if ($data) {
            $schedules = $data['schedules'];
            $newArray = [];
            if ($schedules) {
                foreach (['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'] as $day) {
                    $dayOpenName = $day . '_open';
                    $dayCloseName = $day . '_close';
                    $open = $schedules[$dayOpenName];
                    $close = $schedules[$dayCloseName];
                    $formattedHours = $open . ' - ' . $close;
                    $newArray[$day] = $formattedHours;
                }
            }


            return  json_encode(['status' => true, 'lishting_id' => $data->id, 'description' => $data->description, 'Rating' => $data->directoryRatting($data->id), 'ProductName' => $data->name, 'type' => $data->type, 'OpenCloseTime' => $data->openClose($data->id), 'Amenities' => $data['amenities'], 'Faqs' => $data['faq'], 'galleries' => $data->galleries, 'Review' => $data['reviews'], 'latitude' => $data->latitude, 'longitude' => $data->longitude, 'schedules' =>  $newArray, 'ReviewRatting' => $averageRating, 'is_verify' => $is_verify, 'is_feature' => $is_feature, 'is_toprated' => $is_toprated, 'result' => 'Data Found']);
            //return view('frontend.details',$data);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
        return view('errors.404');
    }

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
                    // $reviews       = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
                    // $totalRate = $reviews->sum('rate');

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
                        'total_rating' => $data->directoryRatting($data->id),
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




    public function wishlistpostapi(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'listing_id' => 'required',
        ];
        $messages = [
            'user_id.required' => 'The User Id field is required.',
            'listing_id.required' => 'The Listing Id field is required.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->is_deleted == true) {
            $wishlist = Wishlists::where('user_id', $request->user_id)->where('listing_id', $request->listing_id)->first();
            if ($wishlist) {
                $wishlist->delete();
            }
            return response()->json(['error' => 'Success! The product has been removed from your favorite list.']);
        }

        if (Wishlists::where('user_id', $request->user_id)->where('listing_id', $request->listing_id)->exists()) {
            return response()->json(['error' => 'Product already added into your favourite list.']);
        }

        $wishlist = new Wishlists();
        //$token = md5(time().$request->name.$request->email);
        $wishlist->user_id =  $request->user_id;
        $wishlist->listing_id = $request->listing_id;
        $wishlist->save();
        return response()->json(['success' => 'Product added into your favourite list.']);
    }



    public function removewishlistpostapi(Request $request)
    {


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


    public function filterAllProduct(Request $request)
    {

        $type    = $request->input('type');
        $keyword = $request->input('keyword');
        $slug    = $request->input('slug');
        $product_data = $request->input('product_data');
        $filtertype = $request->input('filtertype');
        $listingsData = [];

        if ($type == 'cat') {
            $allproduct_query_p = DB::table('categories')
                ->where('title', 'LIKE', "%$keyword%")
                ->whereNull('parent_id')
                ->pluck('id')
                ->toArray();
            // dd($allproduct_query_p);
            $listingsData = [];
            if (!empty($allproduct_query_p)) {
                foreach ($allproduct_query_p as $cat_id) {
                    // dd($cat_id);
                    $allproduct_query = DB::table('categories')->where('parent_id', $cat_id)
                        ->get();
                    $locale = $request->header('Accept-Language') ?? 'en';
                    $translationFile = resource_path("lang/1688299864oqIjFrT6.json");
                    $translations = json_decode(File::get($translationFile), true);
                    $languageTranslations = $translations;
                    foreach ($allproduct_query as $categoriesubIDp) {
                        if ($locale == 'ar') {
                            $title = $languageTranslations[$categoriesubIDp->title];
                        } else {
                            $title = $categoriesubIDp->title;
                        }
                        $listingData = [
                            'id'    => $categoriesubIDp->id,
                            'title' => $title,
                            'slug'  => $categoriesubIDp->slug,
                            'photo' => $categoriesubIDp->photo,
                        ];

                        $listingsData[] = $listingData;
                    }
                }
            } else {
                $listingsData = [];
            }
        }

        if ($type == 'products') {
            // $allproduct_query = DB::table('categories')->where('name', 'LIKE', "%$product_data%")->OrWhere('slug', 'LIKE', "%$product_data%")->get();
            $allproduct_query = DB::table('categories')
                ->when($product_data, function ($q) use ($product_data) {
                    $q->OrWhere('slug', 'LIKE', "%$product_data%");
                    $q->OrWhere('title', 'LIKE', "%$product_data%");
                })
                // ->where(DB::raw('LOWER(slug)'), 'LIKE', '%' . strtolower($product_data) . '%')
                // ->orWhere(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($product_data) . '%')
                ->get();
            // dd($allproduct_query);
            foreach ($allproduct_query as $listing) {
                $categorysss = $listing->id;
                $categoriesub = Category::where('id', $categorysss)->get();
                foreach ($categoriesub as $categoriesubname) {
                    $categoryName = $categoriesubname->slug;
                    $categorytitle = $categoriesubname->title;
                    $categoryid = $categoriesubname->id;
                }
                $data = Listing::where('category_id', $categoryid)
                    // whereSlug($listing->slug)
                    ->whereStatus(1)->first();
                // dd($data);
                if ($data) {
                    $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                    $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
                    // $totalRate = $reviews->sum('rate');
                    // $listingLastUpdate = ListingReview::whereListingId($data->id)->whereStatus(1)->orderBy('created_at', 'desc')->first();
                    // dd($listing);
                    $seduel = json_decode($data->schedules);
                    $newArray = [];
                    if ($seduel) {
                        foreach (['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'] as $day) {
                            $dayOpenName = $day . '_open';
                            $dayCloseName = $day . '_close';
                            $open = $seduel->$dayOpenName;
                            $close = $seduel->$dayCloseName;
                            $formattedHours = $open . ' - ' . $close;
                            $newArray[$day] = $formattedHours;
                        }
                    }
                    $listingData = [
                        'id' => $data->id,
                        'name' => $data->name,
                        'photo' => $data->photo,
                        'is_feature' => $data->is_feature == 1 ? 'FEATURED' : '',
                        'is_verify' => $data->is_verify == 1 ? 'VERIFYED' : '',
                        'is_toprated' => $data->is_toprated == 1 ? 'TOPRATED' : '',
                        'schedules' => $newArray,
                        'slug' => $data->slug,
                        'real_address' => $data->real_address,
                        'phone_number' => $data->phone_number,
                        'latitude' => $data->latitude,
                        'longitude' => $data->longitude,
                        'title'        => $categorytitle,
                        'category_id'  => $categoryid,
                        'total_reviews' => $totlalreviews,
                        'CatName' => $categoryName,
                        // 'total_rating' => $totalRate,
                        'total_rating' => $data->directoryRatting($data->id),
                        'openCloseTime' => $data->openClose($data->id),
                        'ReatingLastUpdate' => isset($data->created_at) && $data->created_at ? $data->created_at->diffForHumans() : 'NA',
                    ];



                    $listingsData[] = $listingData;
                }
            }
        }

        if ($type == 'subcat') {
            $categoriesub = Category::where('slug', $slug)->get();
            foreach ($categoriesub as $key => $categoriesubIDp) {
                if ($filtertype != '') {
                    $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id)
                        ->where('highlight_type', $filtertype)
                        ->get();
                } else {
                    $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id)->get();
                }
                foreach ($allproduct_query as $listing) {
                    $categoryName = $categoriesubIDp->slug;
                    $categorysss = $listing->category_id;
                    $categoriesub = Category::where('id', $categorysss)->get();
                    foreach ($categoriesub as $categoriesubname) {
                        $categoryName = $categoriesubname->slug;
                        $categorytitle = $categoriesubname->title;
                        $categoryid = $categoriesubname->id;
                    }
                    $data = Listing::whereSlug($listing->slug)->whereStatus(1)->first();
                    if ($data) {
                        $reviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3);
                        $totlalreviews = ListingReview::whereListingId($data->id)->whereStatus(1)->paginate(3)->count();
                        // $listingLastUpdate = ListingReview::whereListingId($data->id)->whereStatus(1)->orderBy('created_at', 'desc')->first();
                        $totalRate = $reviews->sum('rate');
                        $listingData = [
                            'id' => $data->id,
                            'name' => $data->name,
                            'photo' => $data->photo,
                            'is_feature' => $listing->is_feature == 1 ? 'FEATURED' : '',
                            'is_verify' => $data->is_verify == 1 ? 'VERIFYED' : '',
                            'is_toprated' => $data->is_toprated == 1 ? 'TOPRATED' : '',
                            'schedules' => $listing->schedules ? json_decode($listing->schedules, true) : [],
                            'slug' => $data->slug,
                            'real_address' => $data->real_address,
                            'phone_number' => $data->phone_number,
                            'latitude' => $data->latitude,
                            'longitude' => $data->longitude,
                            'title'        => $categorytitle,
                            'category_id'  => $categoryid,
                            'total_reviews' => $totlalreviews,
                            'CatName' => $categoryName,
                            // 'total_rating' => $totalRate,
                            'total_rating' =>  $data->directoryRatting($data->id),
                            'openCloseTime' => $data->openClose($data->id),
                            'highlight_type' => $data->highlight_type,
                            'ReatingLastUpdate' => isset($data->created_at) && $data->created_at ? $data->created_at->diffForHumans() : 'NA',
                        ];
                        $listingsData[] = $listingData;
                    }
                }
            }
        }

        $count = count($listingsData);

        return response()->json([
            'status' => $count > 0,
            'allproduct' => $listingsData,
            'result' => $count > 0 ? 'Data Found' : 'Data Not Found',
        ]);
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


    public function cms_contant(Request $request, $slug)
    {
        if ($slug != '') {
            $data['page'] =  DB::table('pages')->where('slug', $slug)->first();
            return  json_encode(['status' => true, 'pages' => $data['page'], 'result' => 'Data Found']);
        } else {
            return  json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }
}
