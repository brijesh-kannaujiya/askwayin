<?php

namespace App\Http\Controllers\Frontend;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Currency;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Listing;
use App\Models\ListingEnquiry;
use App\Models\ListingReview;
use App\Models\Location;
use Jenssegers\Agent\Agent;
use App\Models\RecentViewsListing;
use App\Models\User;
use App\Models\UserSubscription;
use App\Models\Wishlists;
use Illuminate\Http\Request;
use App\Models\Generalsetting;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use InvalidArgumentException;

class CheckoutController extends Controller
{


    public function index(Request $request)
    {
        dd($request);
    }

    public function store(Request $request)
    {
        $base_url = url('/');
        // dd($base_url);
        // $base_url = 'https://askwayin.com/';
        $subscription = new UserSubscription();
        if ($request->currency_id) {
            $currencyValue = Currency::where('id', $request->currency_id)->first();
        }

        if ($request->currency_id) {
            $subscription->price = round(($request->price) * $currencyValue->value, 2);
        } else {
            $subscription->price = $request->price;
        }
        $randomString = bin2hex(random_bytes(16));
        $subscription->subscription_number = $randomString;
        $subscription->user_id = $request->user_id;
        $subscription->plan_id = $request->plan_id;
        $subscription->currency_id = $request->currency_id;
        $subscription->method = $request->method;
        $subscription->days = $request->days;
        $subscription->save();
        // $order_number = Session::get('order_number'); 
        $telrManager = new \TelrGateway\TelrManager();
        $order_id = $subscription->id;
        $total = $subscription->price;
        $billingParams = [
            'first_name' => Auth::user()->name,
            'sur_name' => Auth::user()->username,
            'email' => Auth::user()->email,
        ];
        $url_link = $telrManager->pay($order_id, $total, 'Telr Test Payment Details', $billingParams)->redirect();
        $url = $url_link->getTargetUrl();
        return redirect($url);
        // $curl = curl_init();
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://secure.telr.com/gateway/order.json",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => json_encode([
        //         'method' => 'create',
        //         'store' => 28065,
        //         'authkey' => 'Fs2VV-rBWfj^L4Zn',
        //         'framed' => 0,
        //         'order' => [
        //             'cartid' => $subscription->id,
        //             "test" => 1,
        //             'amount' => $subscription->price,
        //             'currency' => 'AED',
        //             'description' => 'My purchase'
        //         ], 
        //         'return' => [
        //             'authorised' => $base_url . '/authorised',
        //             'declined' => $base_url . '/declined',
        //             'cancelled' => $base_url . '/cancelled'
        //         ]
        //     ]),
        //     CURLOPT_HTTPHEADER => [
        //         "Content-Type: application/json",
        //         "accept: application/json"
        //     ],
        // ]);
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);
        // if ($err) {
        //     echo "cURL Error #:" . $err;
        //     return view(('decline'));
        // } else {
        //     $res = json_decode($response);
        //     // print_r($response);
        //     // die();
        //     $order_id = DB::table('payment_test')->insert([
        //         "payment_url" => $res->order->url,
        //         "payment_ref" => $res->order->ref,
        //         "order_id" => $subscription->id,
        //         "payment_status" => "Pending"
        //     ]);
        //     return redirect($res->order->url);
        // }
    }



    public function callAfterOrder($subscription)
    {
        $this->UserPlanUpdate($subscription);
        // $this->createTransaction($subscription);
        $this->sendMail($subscription);
    }

    public function UserPlanUpdate($subscription)
    {
        $user = User::findorFail($subscription->user_id);
        $days = $subscription->days;
        if ($user) {
            $user->plan_id = $subscription->plan_id;
            if ($user->plan_end_date == NULL) {
                $user->plan_end_date = Carbon::now()->addHours($days);
            } else {
                $user->plan_end_date = $user->plan_end_date->addDays($days);
            }
            $user->status = 2;
            $user->ad_limit += $subscription->plan->post_limit;
            $user->update();
        }
    }

    // public function createTransaction($subscription)
    // {
    //     $user = User::findOrFail($subscription->user_id);
    //     $trans = new Transaction();
    //     $trans->email = $user->email;
    //     $trans->amount = $subscription->price;
    //     $trans->type = "Subscription";
    //     $trans->profit = "minus";
    //     $trans->txnid = $subscription->subscription_number;
    //     $trans->user_id = $user->id;
    //     $trans->save();
    // }

    public function sendMail($subscription)
    {
        $gs = Generalsetting::findOrFail(1);
        if ($gs->is_smtp == 1) {
            $data = [
                'to' => $subscription->user->email,
                'type' => "subscription",
                'cname' => $subscription->user->name,
                'oamount' => $subscription->price,
                'aname' => "",
                'aemail' => "",
                'wtitle' => "",
            ];
            $mailer = new GeniusMailer();
            $mailer->sendAutoMail($data);
        } else {
            $to = $subscription->user->email;
            $subject = " You Purchase Plan Successfully.";
            $msg = "Hello " . $subscription->user->nam . "!\nYou Purchase Plan Successfully.\nThank you.";
            $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
            mail($to, $subject, $msg, $headers);
        }
    }



    // public function authorised(Request $request)
    // {
    //     $telrManager = new \TelrGateway\TelrManager();
    //     $transaction = $telrManager->handleTransactionResponse($request);

    //     $payload = $request->all();
    //     dd($request,$payload);
    //     $results = DB::table('payment_test')->select('payment_ref')->orderBy('id', 'desc')->take(1)->get();
    //     return view('success');
    // }
    // public function cancel(Request $request)
    // {
    //     return view('cancel');
    // }
    // public function declined(Request $request)
    // {
    //     return view('decline');
    // }

    public function paymentSuccess(Request $request)
    {
        $telrManager = new \TelrGateway\TelrManager();
        $transaction = $telrManager->handleTransactionResponse($request); 
        $billing_address_1 = $transaction->response['order']['customer']['address']['line1'];
        $billing_address_2 = $transaction->response['order']['customer']['address']['line2'];
        $billing_city = $transaction->response['order']['customer']['address']['city'];
        $billing_region = $transaction->response['order']['customer']['address']['state'];
        $billing_country = $transaction->response['order']['customer']['address']['country'];
        $billing_zip = $transaction->response['order']['customer']['address']['areacode'];
        $paymentDetails = Transaction::where('cart_id', $request->cart_id)->first();
        if ($paymentDetails) { 
            $paymentDetails->billing_address_1 = $billing_address_1;
            $paymentDetails->billing_address_2 = $billing_address_2;
            $paymentDetails->billing_city = $billing_city;
            $paymentDetails->billing_region = $billing_region;
            $paymentDetails->billing_country = $billing_country;
            $paymentDetails->billing_zip = $billing_zip; 
            $paymentDetails->save(); 
            $subscription = UserSubscription::where('id',$paymentDetails->order_id)->first();
            $this->callAfterOrder($subscription);
        } 
        return view('success');
    }

    public function paymentCancel(Request $request)
    {
        $telrManager = new \TelrGateway\TelrManager();
        $transaction = $telrManager->handleTransactionResponse($request); 
        return view('cancel');
    }

    public function paymentDeclined(Request $request)
    {
        $telrManager = new \TelrGateway\TelrManager();
        $transaction = $telrManager->handleTransactionResponse($request);
        return view('decline');
    }
}
