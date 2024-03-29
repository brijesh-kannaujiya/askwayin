<?php

use App\Http\Controllers;
use App\Http\Controllers\Frontend\DirectoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::redirect('admin', 'admin/login');
//Route::post('the/genius/ocean/2441139', 'Frontend\FrontendController@subscription');
//Route::get('finalize', 'Frontend\FrontendController@finalize');

Route::get('/under-maintenance', 'Frontend\FrontendController@maintenance')->name('front-maintenance');
Route::group(['middleware' => 'maintenance',], function () {
  Route::get('/', [FrontendController::class, 'index'])->name('front.index');

  ////////// By Mohd Raies /////////////

  Route::get('/search', [DirectoryController::class, 'searching_item'])->name('search');
  Route::get('/search_cat', [DirectoryController::class, 'cat_searching_item'])->name('search_cat');
  Route::get('/subcat/{slug}', [DirectoryController::class, 'subcategory'])->name('front.subcat');


  Route::get('/map', [DirectoryController::class, 'map']);



  Route::post('/checkout/telr', [CheckoutController::class, 'store'])->name('checkout.store');
  Route::get('/authorised', [CheckoutController::class, 'authorised']);
  Route::get('/cancel', [CheckoutController::class, 'cancel']);
  Route::get('/declined', [CheckoutController::class, 'declined']);
  Route::get('/ar', [FrontendController::class, 'index'])->name('front.ar');
  Route::get('/en', [FrontendController::class, 'index'])->name('front.en');
  Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
  Route::get('/filter', [DirectoryController::class, 'filter'])->name('front.filter');


  ////////// By Mohd Raies /////////////



  Route::get('/listing', [DirectoryController::class, 'listing'])->name('front.listing');
  Route::get('/listing/{slug}', [DirectoryController::class, 'listingDetails'])->name('front.listing.details');
  Route::post('/listing/wishlist', [DirectoryController::class, 'wishlist'])->name('front.property.wishlist');
  Route::get('/author/{username}', [DirectoryController::class, 'authorDetails'])->name('front.author.details');
  Route::post('/listing-enquiry', [DirectoryController::class, 'listingEnquiry'])->name('front.listing.enquiry');
  Route::post('/listing/review', [DirectoryController::class, 'review'])->name('front.listing.review');
  Route::post('/follow', [DirectoryController::class, 'follow'])->name('front.property.follow');

  Route::get('blogs', [FrontendController::class, 'blog'])->name('front.blog');
  Route::get('blog/{slug}', [FrontendController::class, 'blogdetails'])->name('blog.details');
  Route::get('/blog-search', [FrontendController::class, 'blogsearch'])->name('front.blogsearch');
  Route::get('/blog/category/{slug}', [FrontendController::class, 'blogcategory'])->name('front.blogcategory');
  Route::get('/blog/tag/{slug}', [FrontendController::class, 'blogtags'])->name('front.blogtags');
  Route::get('/blog/archive/{slug}', [FrontendController::class, 'blogarchive'])->name('front.blogarchive');

  Route::get('/pricing-plans/{id?}', [FrontendController::class, 'plans'])->name('front.plans');

  Route::get('/contact', [FrontendController::class, 'contact'])->name('front.contact');
  Route::post('/contact', [FrontendController::class, 'contactemail'])->name('front.contact.submit');

  Route::get('/advertise_with_us', [FrontendController::class, 'advertise_with_us'])->name('front.advertisewithus');
  Route::post('/advertise_with_us', [FrontendController::class, 'advertise_with_us_email'])->name('front.advertisewithus.submit');


  Route::get('/faq', [FrontendController::class, 'faq'])->name('front.faq');
  Route::get('/{slug}', [FrontendController::class, 'page'])->name('front.page');
  Route::post('/subscriber', [FrontendController::class, 'subscriber'])->name('front.subscriber');

  Route::get('/currency/{id}', [FrontendController::class, 'currency'])->name('front.currency');
  Route::get('/language/{id}', [FrontendController::class, 'language'])->name('front.language');

  Route::get('/signup-session/flus', [FrontendController::class, 'signupSession'])->name('front.signup.session');
});
Route::get('/profit/send', [FrontendController::class, 'profitSend'])->name('front.profit.send');
