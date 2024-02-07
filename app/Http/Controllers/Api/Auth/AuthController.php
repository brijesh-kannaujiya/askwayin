<?php

namespace App\Http\Controllers\Api\Auth;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Generalsetting;
use App\Models\Notification;
use App\Models\Transaction;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;

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
            $gs = Generalsetting::findOrFail(1);
            if ($gs->is_verification_email == 1) {
                if ($user->email_verified == 'No') {
                    return response([
                        'message' => 'Your Email is not Verified !.',
                        'status' => 'failed'
                    ], 200);
                }
            }
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
            'name' => 'required|alpha_dash|min:5|',
            'email' => 'required|email|max:255|unique:users',
            // 'phone' => 'required|',
            'username' => 'required',
            'password' => 'required||min:6|confirmed'
        ];
        $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails()) {
        //     return response()->json(['message' => $validator->errors()->first(), 'status' => 'failed'], 200);
        // }
        if (User::where('email', $request->email)->first()) {
            return response([
                'message' => 'Email already exists',
                'status' => 'failed'
            ], 200);
        }

        $gs = Generalsetting::findOrFail(1);
        $user = new User;
        $input = $request->all();

        $input['password'] = bcrypt($request['password']);
        $token = md5(time() . $request->name . $request->email);
        $input['verification_link'] = $token;
        $input['affilate_code'] = md5($request->name . $request->email);
        $input['phone'] =  $request->phone;
        $input['status'] = 1;
        $user->fill($input)->save();

        if ($gs->is_verification_email == 1) {
            $verificationLink = "<a href=" . url('user/register/verify/' . $token) . ">Simply click here to verify. </a>";
            $to = $request->email;
            $subject = 'Verify your email address.';
            $msg = "Dear Customer,<br> We noticed that you need to verify your email address." . $verificationLink;

            if ($gs->is_smtp == 1) {
                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host       = $gs->smtp_host;
                    $mail->SMTPAuth   = true;
                    $mail->Username   = $gs->smtp_user;
                    $mail->Password   = $gs->smtp_pass;
                    if ($gs->smtp_encryption == 'ssl') {
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    } else {
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    }
                    $mail->Port       = $gs->smtp_port;
                    $mail->CharSet = 'UTF-8';
                    $mail->setFrom($gs->from_email, $gs->from_name);
                    $mail->addAddress($user->email, $user->name);
                    $mail->addReplyTo($gs->from_email, $gs->from_name);
                    $mail->isHTML(true);
                    $mail->Subject = $subject;
                    $mail->Body    = $msg;
                    $mail->send();
                } catch (Exception $e) {
                }
            } else {
                $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
                mail($to, $subject, $msg, $headers);
            }
            return response([
                'token' => $token,
                'message' => 'We need to verify your email address. We have sent an email to ' . $to . ' to verify your email address. Please click link in that email to continue.',
                'status' => 'success'
            ], 201);
            // return response()->json('We need to verify your email address. We have sent an email to ' . $to . ' to verify your email address. Please click link in that email to continue.');
        } else {
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
