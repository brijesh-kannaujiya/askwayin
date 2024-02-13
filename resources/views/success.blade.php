@extends('master')

@section('content')
<?php
// $results = DB::table('payment_test')->select('payment_ref')->orderBy('id', 'desc')->take(1)->get();
 
// foreach($results as $resultsss){
// $_SESSION['payment_ref'] = $resultsss->payment_ref;
// }
 
// $curl = curl_init();
// curl_setopt_array($curl, [
//   CURLOPT_URL => "https://secure.telr.com/gateway/order.json",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => json_encode([
//     'method' => 'check',
//     'store' => 28065,
//     'authkey' => 'Fs2VV-rBWfj^L4Zn',
//     'order' => [
//         'ref' => $_SESSION['payment_ref']
//     ]
//   ]),
//   CURLOPT_HTTPHEADER => [
//     "Content-Type: application/json",
//     "accept: application/json"
//   ],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   print_r($response);
//   die();
// }
?>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
             
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
              <img class="telr" src="https://telr.com/wp-content/uploads/2017/10/Telr-logo-green-rgb-2000w.png" alt=""> 
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            <ul> 
                            </ul>
                            {{-- <form action="#"> --}}
                              <a href="{{url('user/dashboard')}}" >
                                <button type="submit" class="btn btn-success btn-lg btn-block">Success</button>
                              </a>
                            {{-- </form> --}}
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection