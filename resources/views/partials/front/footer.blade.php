<footer class="light-footer skin-light-footer style-2">
  <div class="footer-middle">
    <div class="container">
      
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widget">
            <h4 class="widget_title">About Wayin</h4>
            <p>Welcome to Wayin, the ultimate multi-listing searching app designed to help you find exactly what you're looking for quickly and easily. We understand how important it is to have access to a comprehensive platform that offers a diverse range of listings, and that's why we've created this app to make your search process seamless and efficient.
</p><a href="https://askwayin.com/about" style="color: blue;">@lang('Read More')</a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="footer_widget">
            <h4 class="widget_title">Useful Links</h4>
            <ul class="footer-menu">
              <li>
                <a href="https://askwayin.com/about">@lang('About US')</a>
              </li>
              <li>
                <a href="#">@lang('We are Hiring')</a>
              </li>
              <li>
                <a href="#">@lang('Investor Relation')</a>
              </li>
              
             
              
             
              
                            <li><a href="{{ route('front.listing') }}">@lang('All Listings')</a></li>
                            <li><a href="{{ route('front.plans') }}">@lang('Advertise With Us')</a></li>
                            <li><a href="{{ route('front.blog') }}">@lang('Blogs')</a></li>
                            <li><a href="{{ route('front.contact') }}">@lang('Contact')</a></li>
            <li>
                <a href="https://askwayin.com/privacy">@lang('Privacy Policy')</a>
              </li>
             <li>
                <a href="https://askwayin.com/terms-conditions">@lang('Terms & Conditions')</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
          <div class="footer_widget">
            <h4 class="widget_title">Contact Details</h4>
            <!--<div class="address mt-3"> {{ $ps->street }} <br>   {{ $ps->phone }} <br> {{ $ps->contact_email }} </div>-->
            <div class="address mt-3"> @lang('<strong>Virtual World for Computer Systems & Communication Equipment Software Trading </strong> <br> Mushrif Village, Villa 45, Mirdif, <br> Dubai - United Arab Emirates ')<br>   {{ $ps->phone }} <br>@lang($ps->contact_email) </div>
            <div class="address mt-2">
              <ul class="list-inline">
                        @if ($sociallinks)
                        @foreach ($sociallinks as $key => $social)
                        @if($social->status)
                        <li class="list-inline-item">
                        <a href="{{ $social->link }}" class="theme-cl">
                        <i class="{{ $social->icon }}"></i>
                        </a>
                        </li>
                        @endif
                        @endforeach
                        @endif
            </div>
            
            <ul class="ps-0">
                <li><a href="#"><img src="{{asset('assets/images/gplay.png')}}" class="img-fluid"></a></li>
               <!--/ <li><a href="#"><img src="{{asset('assets/images/Logos-01.svg')}}" class="img-fluid"></a></li>-->
                <li><a href="#"><img src="{{asset('assets/images/astore.png')}}" class="img-fluid"></a></li>
            </ul>
            
          </div>
        </div>
        
         <div class="row align-items-center">
        <div class="col-lg-12 col-md-12 text-center">
         <img src="{{asset('assets/images/Logos-01.svg')}}" class="img-fluid" style="width: 250px;">
        </div>
      </div>
        
        
      </div>
    </div>
  </div>
  <div class="footer-bottom br-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12 text-center">
          <p class="mb-0"> Copyright © <?= date('Y'); ?> All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!--
<footer class="light-footer skin-light-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="footer_widget">
                        <img src="{{ asset('assets/images/'.$gs->footer_logo)}}" class="img-footer small mb-2" alt="" />

                        <div class="address mt-2">
                            {{ $ps->street }}
                        </div>
                        <div class="address mt-3">
                            {{ $ps->phone }}<br>{{ $ps->contact_email }}
                        </div>
                        <div class="address mt-2">
                            <ul class="list-inline">
                                @if ($sociallinks)
                                    @foreach ($sociallinks as $key => $social)
                                        @if($social->status)
                                            <li class="list-inline-item">
                                                <a href="{{ $social->link }}" class="theme-cl">
                                                    <i class="{{ $social->icon }}"></i>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">@lang('Main Navigation')</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ route('front.listing') }}">@lang('Explore Listings')</a></li>
                            <li><a href="{{ route('front.plans') }}">@lang('Pricing Plan')</a></li>
                            <li><a href="{{ route('front.blog') }}">@lang('Blogs')</a></li>
                            <li><a href="{{ route('front.contact') }}">@lang('Contact')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">@lang('Helpful Topics')</h4>
                        <ul class="footer-menu">
                            @foreach ($pages as $key=>$page)
                                <li><a href="{{ route('front.page',$page->slug) }}">{{ $page->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom br-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">
                        @php
                            echo $gs->copyright;
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
-->