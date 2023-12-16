<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


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

    public function logout()
    {
        return response([
            'message' => 'Logout Success',
            'status' => 'success'
        ], 200);
    }

    public function search_api(Request $request, $slug = '')
    {
        $categoriesub = Category::where('slug', $slug)->get();
        foreach ($categoriesub as $key => $categoriesubIDp) {
            $allproduct_query = DB::table('listings')->where('category_id', $categoriesubIDp->id);
            $allproduct_query = $allproduct_query->leftJoin('listing_reviews', 'listings.id', '=', 'listing_reviews.listing_id')
                ->select('listings.id', 'listings.name', 'listings.photo', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'listings.category_id', DB::raw('SUM(listing_reviews.rate) as total_rating'), DB::raw('COUNT(listing_reviews.listing_id) as total_reviews'))
                ->groupBy('listings.id', 'listings.name', 'listings.photo', 'listings.highlight_type', 'listings.is_feature', 'listings.schedules', 'listings.slug', 'listings.real_address', 'listings.phone_number', 'listings.category_id');
        }

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

        if ($slug && $request->highlight) {
            $allproduct_query->where(function ($query) use ($request) {
                $query->where('listings.category_id', 'LIKE', "%$request->category%")->where('listings.highlight_type', 'LIKE', "%$request->highlight%");
            });
        }
        $allproduct = $allproduct_query->get();
        if ($allproduct->isNotEmpty()) {
            return json_encode(['status' => true, 'listing' => $allproduct, 'result' => 'Data Found']);
        } else {
            return json_encode(['status' => false, 'result' => 'Data Not Found']);
        }
    }
}
