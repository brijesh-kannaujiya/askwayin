<?php

namespace App\Http\Controllers\Subscription;

use App\Repositories\SubscriptionRepository;
use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Generalsetting;
use App\Models\PaymentGateway;
use App\Models\UserSubscription;
use Telr\{
    Api\Item,
    Api\Payer,
    Api\Amount,
    Api\Payment,
    Api\ItemList,
    Rest\ApiContext,
    Api\Transaction,
    Api\RedirectUrls,
    Api\PaymentExecution,
    Auth\OAuthTokenCredential
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PaypalController extends Controller
{
    private $_api_context;
    public $subscriptionRepositorty;

  

    public function telrstore(Request $request){
        $settings = Generalsetting::findOrFail(1);
        $data = PaymentGateway::whereKeyword('telr')->first();
        dd($data);
        $order_id = rand(4111, 9999);
        $amount = 231;

        $telrManager = new \TelrGateway\TelrManager();

        $billingParams = [
                'first_name' => $request->fname,
                'sur_name' => $request->lname,
                'address_1' => $request->address,
                'address_2' => $request->area,
                'city' => $request->city,
                'zip' => $request->zip,
                'country' => $request->country,
                'email' => $request->email,
            ];
  dd($billingParams);
        return $telrManager->pay($order_id, $amount, 'Telr Testing Youtube', $billingParams)->redirect();
    
}
       public function success(Request $request) {
        $telrManager = new \TelrGateway\TelrManager();

        $transaction = $telrManager->handleTransactionResponse($request);

        $card_last_4 = $transaction->response['order']['card']['last4'];
        $name = $transaction->response['order']['customer']['name']['forenames']." ".$transaction->response['order']['customer']['name']['surname'];

        return view('success')->with([
            'request'   =>  $request,
            'card_last_4'   =>  $card_last_4,
            'name'  =>  $name,
        ]);
    }
    public function cancel(Request $request) {
        return view(('cancel'));
    }
    public function declined(Request $request) {
        return view(('decline'));
    }
}
