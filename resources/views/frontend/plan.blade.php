@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}" class="text-light">@lang('Home')</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">@lang('Pricing')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- =========================== Price Box ======================= -->
    <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="theme-cl mb-0">{{ $ps->plan_title }}</h6>
                        <h2 class="ft-bold">{{ $ps->plan_subtitle }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($plans as $key => $data)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="Rego-price-wrap">
                            <div class="Rego-author-header">
                                <div class="Rego-price-currency">
                                    <h3>
                                        <span class="Rego-new-price" style="color:{{ $data->price_color}}">{{ globalCurrency()->sign}}<del>{{ showAmount($data->price) }}</del></span>
                                        @if ($data->prev_price>0)
                                            <span class="Rego-old-price">{{ globalCurrency()->sign}}<del>{{ showAmount($data->prev_price) }}</del></span>
                                        @endif
                                    </h3>
                                </div>
                                <div class="Rego-price-title">
                                    <div class="Rego-price-tlt">
                                        <h4>{{ $data->title }}</h4>
                                    </div>

                                </div>
                                <div class="Rego-price-subtitle">{{ $data->subtitle }}</div>
                            </div>
                            <div class="Rego-price-body">
                                <ul class="price__features">
                                    @if ($data->attribute != NULL)
                                        @foreach (json_decode($data->attribute) as $key => $attribute)
                                            <li><i class="fa fa-angle-right"></i>{{ $attribute }}</li>  
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="Rego-price-bottom">
                                <a class="Rego-price-btn" href="{{ route('user.package.subscription',$data->id) }}"><i class="fas fa-shopping-basket"></i>@lang('Purchase Now')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>





                        <div class="d-block mb-2">
                            <div class="jbd-01 py-2">
                                <div class="jbd-details">
                                    <h5 class="ft-bold fs-lg text-center">TERMS & CONDITIONS</h5>

                                    <div class="d-block mt-3">
                                        <div id="accordion2" class="accordion">
                                            
                                                <div class="card">
                                                    <div class="card-header" id="h0">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#ord0" aria-expanded="true" aria-controls="ord0">
                                                            TERMS & CONDITIONS
                                                        </button>
                                                        </h5>
                                                    </div>

                                                    <div id="" class="collapse show" aria-labelledby="h" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="Rego-price-body">
                                <ul class="price__features">
                                    
                                            <li><i class="fa fa-angle-right"></i>Virtual World for Computer System & Communication Equipment Software Trading” maintains the www.askwayin.com Website</li>
                                            <li><i class="fa fa-angle-right"></i>Visa or MasterCard debit and credit cards in AED will be accepted for payment’</li>
                                            <li><i class="fa fa-angle-right"></i>We will not trade with or provide any services to OFAC (Office of Foreign Assets Control) and sanctioned countries in accordance with the law of UAE</li>
                                            <li><i class="fa fa-angle-right"></i>Cardholder must retain a copy of transaction records and Merchant policies and rules</li>
                                        
                                </ul>
                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    



                         <div class="d-block mb-2">
                            <div class="jbd-01 py-2">
                                <div class="jbd-details">
                                    <h5 class="ft-bold fs-lg text-center">PRIVACY POLICY</h5>

                                    <div class="d-block mt-3">
                                        <div id="accordion2" class="accordion">
                                            
                                                <div class="card">
                                                    <div class="card-header" id="h0">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#ord0" aria-expanded="true" aria-controls="ord0">
                                                           PRIVACY POLICY
                                                        </button>
                                                        </h5>
                                                    </div>

                                                    <div id="" class="collapse show" aria-labelledby="h" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="Rego-price-body">
                                <ul class="price__features">
                                    
                                            <li><i class="fa fa-angle-right"></i>All credit/debit cards’ details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties</li>
                                            <li><i class="fa fa-angle-right"></i> www.askwayin.com will not pass any debit/credit card details to third parties</li>
                                            <li><i class="fa fa-angle-right"></i>The www.askwayin.com is not responsible for the privacy policies of websites to which it links. If you provide any information to such third parties different rules regarding the collection and use of your personal information may apply. You should contact these entities directly if you have any questions about their use of the information that they collect.</li>
                                        
                                </ul>
                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                                  <div class="d-block mb-2">
                            <div class="jbd-01 py-2">
                                <div class="jbd-details">
                                    <h5 class="ft-bold fs-lg text-center" style="text-transform: uppercase;">Cancellation and Refund Policy</h5>

                                    <div class="d-block mt-3">
                                        <div id="accordion2" class="accordion">
                                            
                                                <div class="card">
                                                    <div class="card-header" id="h0">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#ord0" aria-expanded="true" aria-controls="ord0" style="text-transform: uppercase;">
                                                           Cancellation and Refund Policy
                                                        </button>
                                                        </h5>
                                                    </div>

                                                    <div id="" class="collapse show" aria-labelledby="h" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <div class="Rego-price-body">
                                                                <p>We are committed to providing a seamless and transparent experience for our users. We understand that circumstances may arise that require cancellations and refunds for our multi-listing services. To ensure fairness and clarity, we have established the following Cancellation and Refund Policy:</p>
                                <h5  style="text-transform: uppercase;">Cancellation Policy:</h5>
                                <p>Listing Removal: If you decide to remove a listing from our multi-listing platform after it has been published, you may do so at any time. No cancellation fees will be applied.</p>
                                <p>Subscription Cancellation: If you have subscribed to a premium plan and wish to cancel it, you can do so by contacting our customer support team. Cancellations will be effective from the next billing cycle. No refunds will be provided for the remaining days of the current billing cycle.</p>
                                <h5  style="text-transform: uppercase;">Refund Policy:</h5>
                                
                                <p>Listing Fee Refunds: We do not offer refunds for fees paid for listing placements on our platform once the listing has been published.</p>
                                
                                <p>Subscription Fee Refunds: We do not offer refunds for subscription fees for the current billing cycle. However, if you cancel a subscription before the next billing cycle, you will not be charged for the subsequent cycle.</p>
                                
                                <p>Erroneous Charges: In the event of accidental charges or billing errors, please contact our customer support within 7 days of the charge, and we will review and rectify the situation promptly.</p>
                                
                                <h5  style="text-transform: uppercase;">Exceptional Circumstances:</h5>
                                <p>Technical Issues: If you encounter technical issues that prevent you from accessing or using our services as intended, please contact our customer support. We will assess the situation and, if necessary, provide appropriate compensation or refunds.</p>
                                
                                <p>Service Disruption: In cases where our platform experiences prolonged downtime or significant disruptions, we may offer pro-rated refunds or extensions on subscriptions as a gesture of goodwill.</p>
                                
                                 <h5  style="text-transform: uppercase;">Requesting Cancellations and Refunds:</h5>
                                 <p>To request a cancellation or refund, please reach out to our customer support team at info@thevrw.com. Provide relevant details about the listing or subscription, and our team will guide you through the process.</p>
                                 <p>Please note that this policy is subject to change, and any modifications will be communicated through our official website. We encourage you to review this policy periodically.</p>
                                 
                                 <p>We appreciate your understanding of our Cancellation and Refund Policy. If you have any questions or concerns, please don't hesitate to contact us.</p>
                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
    <!--               <div class="row justify-content-center" style="margin-bottom: -30px">-->
    <!--            <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">-->
    <!--                <div class="sec_title position-relative text-center mb-5">-->
                         
    <!--                    <h2 class="ft-bold">We Acccept</h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--             <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">-->
                         
    <!--                </div>-->
    <!--                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">-->
                         
    <!--                          <img src="{{ asset('assets/images/Logos-01.svg') }}" class="logo" alt="" style="margin: 0px 5px 4px 115px;-->
    <!--max-width: 100%;-->
    <!--width: 200px;">-->
    <!--                    </div>-->
                   
    <!--                 <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">-->
                        
    <!--                </div>-->
                     
                
    <!--        </div>-->
            
 

        </div>
    </section>
    <!-- ===========================  Price Box End ===================== -->

    <!-- ======================= Newsletter Start ============================ -->
    @includeIf('partials.front.cta')
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    @include('partials.front.footer')
    <!-- ============================ Footer End ================================== -->

@endsection

@push('js')

@endpush
