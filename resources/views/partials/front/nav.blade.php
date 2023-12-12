<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
?>
<style>
    @media only screen and (max-width: 992px)
    {
        /*.nav-menu {
           display: none;
        }*/
        
        .nav-toggle
        {
            display:block;
        }
        
        .nav-brand
        {
            padding: 0 35px;
        }
        
        .nav-menus-wrapper {
            width: 100%!important;
            height: 100%;
            top: 0;
            left: -400px;
            position: fixed;
            background-color: #fff;
            z-index: 20000;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            transition-duration: .8s;
            transition-timing-function: ease;
        }
        
        .nav-menus-wrapper-close-button {
            width: 25px;
            height: 25px;
            margin: 10px 5px;
            display: none;
            float: right;
            color: #363f50;
            font-size: 12px;
            cursor: pointer;
            background: #ecf1f5;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            line-height: 0;
            display:flex;
        }
        
        .align-to-right
        {
            float:inherit;
            display: flex;
            flex-direction: column;
            align-items: baseline;
        }
        
        .nav-menu.nav-menu-social>li>a
        {
            padding: 10px 12px;
            color:#000!important;
        }
        
        .nav-menu.nav-menu-social>li.add-listing a
        {
            padding: 10px 22px;
        }
        
        .flex-four
        {
            justify-content: space-around;margin-bottom:25px;
        }
        
        #filters
        {
            flex-direction:column;
        }
        
        h1.heading:before
        {
            width:inherit;background-color:inherit!important;
        }
        
        
        .dtl-flex
        {
            flex-direction:column;
        }
        
        .dtl-logo
        
        {
            width:inherit;
        }
        
        .jbd-details
        {
            width:-webkit-fill-available;
            margin-top:15px;
        }
        
        .jbd-details h5
        {
            margin-bottom:0;
        }
        
        .btn-type
        {
            flex-direction:column;
        }
        
        ul.btn-type li
        {
            margin-right:0;
            margin-bottom:5px;
        }
        
    }
    
    /*.goog-te-gadget {
    color: transparent !important;
    font-size: 6px!important;
}
#google_translate_element span {
    display: none;
}*/


.support-top
{
    display:flex;
}

.skiptranslate iframe
{
    display:none;
}

.ct-language__dropdown
{
    display: flex;
    justify-content: end;
    margin-bottom:0;
}

ul.ct-language__dropdown span
{
    font-size: 15px;
    margin-top: 0px;
    background: white;
    padding: 5px 15px;
    border-radius: 25px;
    color: #000;
}

ul.ct-language__dropdown li
{
    padding:0 10px;
    margin:5px 0;
}
ul.ct-language__dropdown li a
{
    color:#fff;font-size:15px;
}

/*@media only screen and (max-width:480px)
{
    .support-top
    {
        justify-content:center;
        font-size:15px;
    }
    
    ul.ct-language__dropdown span
    {
        display:none;
    }
    
    .ct-language__dropdown
    {
        justify-content:center;
        margin-top:15px;
        flex-flow: wrap;
    }
}*/






        
</style>


@if ($gs->theme == 'theme-3' || $gs->theme == 'theme-5')
    <div class="header {{ request()->path() == '/' ? 'header-transparent change-logo' : 'header-light dark-text head-border  '}}">
        <div class="container ph-bgwhite">
            <nav id="navigation" class="navigation navigation-landscape">
             
                <div class="nav-header">
                    @if(request()->is('/'))
                    <a class="nav-brand static-logo" href="{{ route('front.index') }}"><img src="{{asset('assets/images/'.$gs->light_logo)}}" class="logo" alt="" /></a>
                   @endif
                    <a class="nav-brand fixed-logo" href="{{ route('front.index') }}"><img src="{{asset('assets/images/'.$gs->logo)}}" class="logo" alt="" /></a>

              <div class="nav-toggle"></div>
              <div class="mobile_nav">
                <ul>
                            @auth
                                <li>
                                    <a href="{{ route('user.dashboard') }}" class="theme-cl fs-lg">
                                        <i class="lni lni-user"></i>
                                    </a>
                            </li>
                            @else
                                <li>
                                    <a href="{{ route('user.login') }}" class="theme-cl fs-lg">
                                        <i class="lni lni-user"></i>
                                    </a>
                                </li>
                            @endauth
                        </ul>
              </div>
            </div>
            
            
            
                <!--<div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">
                        @foreach(json_decode($gs->menu,true) as $key => $menue)
                            <li><a href="{{ url($menue['href']) }}" target="{{ $menue['target'] == 'blank' ? '_blank' : '_self' }}">{{ $menue['title'] }}</a></li>
                        @endforeach
                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        @auth
                            <li><a href="javascript:void(0);">@lang('My account')</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ route('user.dashboard') }}"><i class="lni lni-dashboard me-2"></i>@lang('Dashboard')</a></li>
                                    <li><a href="{{ route('user.change.password.form') }}"><i class="lni lni-lock-alt me-2"></i>@lang('Change Password')</a></li>
                                    <li><a href="{{ route('user.logout') }}"><i class="lni lni-dashboard me-2"></i>@lang('Logout')</a></li>
                                </ul>
                            </li>

                            <li class="add-listing">
                                <a href="{{ route('user.listing.type') }}" >
                                    <i class="fas fa-plus me-2"></i>@lang('Add Listing')
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('user.login') }}" class="ft-bold">
                                    <i class="fas fa-sign-in-alt me-1 theme-cl"></i>@lang('Sign In')
                                </a>
                            </li>
                            <li class="add-listing">
                                <a href="{{ route('user.listing.type') }}" >
                                    <i class="fas fa-plus me-2"></i>@lang('Add Listing')
                                </a>
                            </li>
                        @endauth

                    </ul>
                </div>-->
                
                
                
                
    
                
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                      <ul class="nav-menu nav-menu-social align-to-right list-unstyled ct-language__dropdown">
                             
                               
                         <li>
                          <a href="{{ route('front.page','we-are-hiring') }}"><i class="ri-briefcase-line"></i> @lang('We are Hiring')</a>
                        </li>
                        <li>
                          <a href="{{ route('front.page','advertise_with_us') }}"><i class="ri-advertisement-line"></i> @lang('Advertise')</a>
                        </li>  
                        <li><a href="{{ route('front.language',1) }}" class="lang-en lang-select"><img src="https://askwayin.com/assets/images/en.png" class="img-fluid en" /> @lang('English')</a></li>
		                <li><a href="{{ route('front.language',18) }}" class="lang-es lang-select"><img src="https://askwayin.com/assets/images/ar.png" class="img-fluid ar" /> @lang('Arabic')</a></li>
                      
                          <!--                  <li>-->
                          <!--                      <div class="headertopleft">-->
                          <!--  <div id="google_translate_element"></div>-->
                          <!--</div>-->
                                              <!--<a onclick="toggleText()" class="text-white" id="toggleButton" style="color:black;"> Arabic </a>-->
                          <!--                  </li>-->
                           @auth
                            <!--<li><a href="javascript:void(0);">@lang('My account')</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="{{ route('user.dashboard') }}"><i class="lni lni-dashboard me-2"></i>@lang('Dashboard')</a></li>
                                            <li><a href="{{ route('user.change.password.form') }}"><i class="lni lni-lock-alt me-2"></i>@lang('Change Password')</a></li>
                                            <li><a href="{{ route('user.logout') }}"><i class="lni lni-dashboard me-2"></i>@lang('Logout')</a></li>
                                        </ul>
                                    </li>
        
                                    <li class="add-listing">
                                        <a href="{{ route('user.listing.type') }}" >
                                            <i class="fas fa-plus me-2"></i>@lang('Add Listing')
                                        </a>
                                    </li>-->
                             @else
                           
                          <li>
                          <a href="{{ route('user.login') }}" class="ft-bold"><i class="ri-login-box-line"></i> @lang('Login / Sign Up') </a>
                        </li>
                        <li class="add-listing">
                          <a href="{{ route('user.listing.type') }}">
                            <i class="fas fa-plus me-2"></i>@lang('Free Listing') </a>
                        </li>
                        @endauth
                      </ul>
                    </div>
            
            </nav>
        </div>
    </div>
@else
<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/'.$gs->logo) }}" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        @auth
                            <li>
                                <a href="{{ route('user.dashboard') }}" class="ft-bold">
                                    @lang('Dashboard')
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('user.login') }}" class="theme-cl fs-lg">
                                    <i class="lni lni-user"></i>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    @foreach(json_decode($gs->menu,true) as $key => $menue)
                        <li>
                            <a href="{{ url($menue['href']) }}" target="{{ $menue['target'] == 'blank' ? '_blank' : '_self' }}">{{ $menue['title'] }} </a>
                        </li>
                    @endforeach
                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">

                    @auth
                       <!-- <li><a href="javascript:void(0);">@lang('My account')</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="{{ route('user.dashboard') }}"><i class="lni lni-dashboard me-2"></i>@lang('Dashboard')</a></li>
                                <li><a href="{{ route('user.change.password.form') }}"><i class="lni lni-lock-alt me-2"></i>@lang('Change Password')</a></li>
                                <li><a href="{{ route('user.logout') }}"><i class="lni lni-dashboard me-2"></i>@lang('Logout')</a></li>
                            </ul>
                        </li>-->

                        <li class="add-listing">
                            <a href="{{ route('user.listing.type') }}" >
                                <i class="fas fa-plus me-2"></i>@lang('Add Listing')
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('user.login') }}" class="ft-bold">
                                <i class="fas fa-sign-in-alt me-1 theme-cl"></i>@lang('Sign In')
                            </a>
                        </li>
                        <li class="add-listing">
                            <a href="{{ route('user.listing.type') }}" >
                                <i class="fas fa-plus me-2"></i>@lang('Add Listing')
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</div>
@endif


 

