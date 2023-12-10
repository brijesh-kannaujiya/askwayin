<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iVOdtthGGOaJIFGi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Fk3j1blcoQeXxej',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/registerapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1emt9448yE7qK3OO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/send-reset-password-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YFBvQukjlTVTcYXK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v53XUyHz4Nvx3ng1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/loggeduser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HVxi7vGdX6ToTsFS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Hx6dKvj1tCHEzPO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/under-maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front-maintenance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search_cat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search_cat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cat_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T8ipiNpEOXcVizFL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0kLvaUdMpQKjbeL3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W5in6ijhixT4QUwI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7aB7OUu2IJ4Bxlhj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OlQeTNyPxJFRmul9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/allproduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GFy5XP0BpHlBfYh3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product-lishting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5HicmlppZgfQcEFL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/alllogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pKENfOB8q1wmMwbe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contactmailapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RQng4fZeagpTY1vz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wishlistapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L38i2UAslU3dNqqx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/removewishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::awxrYaNFSWtFl7jw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/postreview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WD71cyiu8zRy0FhV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search_api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3j2uZIVkjHzmZNbU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/SubCat_search_api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eFMqEq5Hqo7TuCvA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/filterallproduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wMtWhmkTVryMYyim',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/highlight_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6L1YCMINnHBv3OOO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/appaddsdata' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bzZAAXRn2AAdNbpS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/telr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/authorised' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NSqKruuVCoGvljrO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::woLmxHW21tZeFoj3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/declined' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xdR2cDzBYusZrYF8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.ar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.en',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.filter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listing-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.listing.enquiry',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/follow' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.property.follow',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogsearch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pricing-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.contact.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/advertise_with_us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.advertisewithus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'front.advertisewithus.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/signup-session/flus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.signup.session',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profit/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.profit.send',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cache/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cache.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forgot',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forgot.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menu-builder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.menubuilder',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plans/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plans/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plans/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/amenities/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/amenities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/amenities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/amenities/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/amenities/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/foodtype/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/foodtype' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/foodtype/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/foodtype/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/foodtype/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/locations/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/locations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/locations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/locations/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/locations/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pending-listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.pending',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/approved-listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing/type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gallery.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gallery.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gallery/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gallery.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/diretory/review/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.diretory.review.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/diretory/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.diretory.review.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/hotel-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.hotel.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/restaurant-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.restaurant.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/beauty-booking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.beauty.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/booking/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.booking.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing-enquiry/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.enquiry.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.enquiry',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/listing-enquiry/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.enquiry.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisewithus-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisewithus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisewithus-enquiry/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisewithus.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/areas/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/areas/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/areas/bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/bonus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.bonus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bonus.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/default/image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-image',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/balance/add/deduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.balance.add.deduct',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/SubscriberUser/bonus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.SubscriberUser.bonus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/SubscriberUser/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.SubscriberUser.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/SubscriberUser/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/SubscriberUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.SubscriberUser.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/SubscriberUser/default/image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-image',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/SubscriberUser/balance/add/deduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.SubscriberUser.balance.add.deduct',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transactions/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.transactions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/category/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cblog.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cblog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cblog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cblog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/taxes/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/taxes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/taxes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.logo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/favicon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.fav',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/loader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.load',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/update/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/contents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.contents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/moneytransfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.moneytransfer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.theme',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/custom-css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.customcss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.customcss.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/breadcumb' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.breadcumb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.footer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/affilate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.affilate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/error-banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.error.banner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/popup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.popup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/manage-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general-settings/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.maintenance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/twilio-sms-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.twilio',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/nexmo-sms-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.nexmo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/process/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.process.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.process.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/process/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.process.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account/process/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.process.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mission/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mission.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mission.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mission/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mission.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mission/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mission.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/review/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/review/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partner/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partner.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partner/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partner.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partner/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appadds/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.appadds.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appadds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.appadds.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appadds/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.appadds.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/appadds/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.appadds.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bartner/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bartner.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bartner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bartner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bartner/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bartner.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/bartner/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bartner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sartner/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sartner.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sartner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sartner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sartner/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sartner.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sartner/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sartner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home_banner_advertisement/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home_banner_advertisement.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home_banner_advertisement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home_banner_advertisement.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home_banner_advertisement/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home_banner_advertisement.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home_banner_advertisement/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home_banner_advertisement.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faq/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/hero' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.hero',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/homepage/customization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.customization',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/homepage/customization/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.customization.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/listing-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/download-apps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.download',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/call-to-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.call',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/section/heading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.heading',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/contact/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.contactupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/update/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-templates/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mail.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mail.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/email-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mail.config',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groupemail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.group.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/groupemailpost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.group.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sms-templates/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sms.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sms-templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sms.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/send/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/user/ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.message',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/messages/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/paymentgateway/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/paymentgateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/paymentgateway/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/currency/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/staff/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/staff/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-kyc/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage.kyc.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-kyc-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage.kyc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-kyc-module' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage.module',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-kyc-module/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage.module.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/kyc-form/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.form.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/kyc-form/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.form.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminlanguages/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminlanguages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminlanguages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fonts/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/fonts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/font/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/font/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page-settings/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/page/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login-registration/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.ps.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/seotools/analytics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.seotool.analytics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/seotools/analytics/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.seotool.analytics.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/seotools/keywords' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.seotool.keywords',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/seotools/keywords/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.seotool.keywords.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-links/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-links/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sitemap/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sitemap/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sitemap/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/sitemap/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.download',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subs.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscribers/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subs.download',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social/update/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.update.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.facebook',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.google',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/check/movescript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-move-script',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generate/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-generate-backup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-activation-form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin-activate-purchase',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/clear/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-clear-backup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.login.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.forgot',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.forgot.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.otp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.otp.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.register.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.transaction',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/2fa-security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.show2faForm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/createTwoFactor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.createTwoFactor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/disableTwoFactor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.disableTwoFactor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/listing/analytics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.analytics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/kyc-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.kyc.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.kyc.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/listing/type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/listing/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/listing/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/saved/listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.saved.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/gallery/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.gallery.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/gallery/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.gallery.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/gallery/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.gallery.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/booking/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.booking.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/my-bookings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.my.booking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/hotel/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.booking.hotel.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/restaurant/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.booking.restaurant.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/beauty/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.booking.beauty.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/customer-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.customer.enquiry',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/my-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.my.enquiry',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/pricing-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.pricing.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referrals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral-commissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.commissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support-tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.message.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support-tickets/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.message.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.change.password.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.change.password',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/package' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.package.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/stripe-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.stripe.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/free' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.free.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/paypal-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.paypal.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/paypal/deposit/notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.paypal.notify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/paypal/deposit/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.paypal.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/instamojo-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.instamojo.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/instamojo-notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.instamojo.notify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/paytm-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.paytm.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/paytm-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.paytm.notify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/razorpay-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.razorpay.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/razorpay-notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.razorpay.notify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/molly-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.molly.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/molly-notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.molly.notify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/flutter/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.flutter.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/flutter/notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.flutter.notify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/paystack/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.paystack.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/authorize-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.authorize.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/subscription/manual-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.manual.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/affilate/code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-affilate-code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notf/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-notf-show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notf/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-notf-count',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notf/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer-notf-clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|user(?|/(?|edituser/([^/]++)(*:46)|updateuser/([^/]++)(*:72)|deleteUser/([^/]++)(*:98)|reset\\-password/([^/]++)(*:129)|changepassword/([^/]++)(*:160))|profile/([^/]++)(*:185))|search(?|/([^/]++)(*:212)|_(?|filter/([^/]++)(*:239)|api/([^/]++)(*:259)))|all(?|subcategoryapi/([^/]++)(*:298)|product/([^/]++)(*:322))|product\\-(?|detail/([^/]++)(*:358)|lishting/([^/]++)(*:383))|cms/([^/]++)(*:404)|wishlistapi/([^/]++)(*:432)|highlight/([^/]++)(*:458)|lang/([^/]++)(*:479))|uthor/([^/]++)(*:502))|/subcat/([^/]++)(*:527)|/l(?|ang/([^/]++)(*:552)|isting/(?|([^/]++)(*:578)|wishlist(*:594)|review(*:608)))|/blog/(?|([^/]++)(*:635)|category/([^/]++)(*:660)|tag/([^/]++)(*:680)|archive/([^/]++)(*:704))|/([^/]++)(*:722)|/subscriber(*:741)|/currency/([^/]++)(*:767)|/language/([^/]++)(*:793)|/admin/(?|c(?|hange\\-password/([^/]++)(*:839)|ategories/(?|edit/([^/]++)(*:873)|status/([^/]++)/([^/]++)(*:905)|update/([^/]++)(*:928)|delete/([^/]++)(*:951))|urrency/(?|edit/([^/]++)(*:984)|update/([^/]++)(*:1007)|delete/([^/]++)(*:1031)|status/([^/]++)/([^/]++)(*:1064)))|p(?|lans/(?|edit/([^/]++)(*:1100)|status/([^/]++)/([^/]++)(*:1133)|update/([^/]++)(*:1157)|delete/([^/]++)(*:1181))|a(?|rtner/(?|edit/([^/]++)(?|(*:1220))|delete/([^/]++)(*:1245))|ymentgateway/(?|edit/([^/]++)(*:1284)|update/([^/]++)(*:1308)|delete/([^/]++)(*:1332)|status/([^/]++)/([^/]++)(*:1365))|ge/(?|edit/([^/]++)(*:1394)|update/([^/]++)(*:1418)|delete/([^/]++)(*:1442)|status/([^/]++)/([^/]++)(*:1475)))|roducts/popular/([^/]++)(*:1510))|a(?|menities/(?|edit/([^/]++)(*:1549)|status/([^/]++)/([^/]++)(*:1582)|update/([^/]++)(*:1606)|delete/([^/]++)(*:1630))|d(?|vertisewithus\\-enquiry/delete/([^/]++)(*:1682)|minlanguages/(?|edit/([^/]++)(?|(*:1723))|status/([^/]++)/([^/]++)(*:1757)|delete/([^/]++)(*:1781)))|reas/(?|edit/([^/]++)(*:1813)|status/([^/]++)/([^/]++)(*:1846)|update/([^/]++)(*:1870)|delete/([^/]++)(*:1894))|ccount/process/(?|edit/([^/]++)(?|(*:1938))|delete/([^/]++)(*:1963))|ppadds/(?|edit/([^/]++)(?|(*:1999))|delete/([^/]++)(*:2024)))|f(?|o(?|odtype/(?|edit/([^/]++)(*:2066)|status/([^/]++)/([^/]++)(*:2099)|update/([^/]++)(*:2123)|delete/([^/]++)(*:2147))|nt/(?|edit/([^/]++)(*:2176)|update/([^/]++)(*:2200)|status/([^/]++)/([^/]++)(*:2233)|delete/([^/]++)(*:2257)))|aq/(?|edit/([^/]++)(*:2287)|delete/([^/]++)(*:2311)|update/([^/]++)(*:2335)))|l(?|ocations/(?|edit/([^/]++)(*:2375)|status/([^/]++)/([^/]++)(*:2408)|update/([^/]++)(*:2432)|delete/([^/]++)(*:2456))|isting(?|/(?|d(?|atatables/([^/]++)(*:2501)|elete/([^/]++)(*:2524))|edit/([^/]++)(*:2547)|update/([^/]++)(*:2571)|status/([^/]++)/([^/]++)(*:2604)|faq/([^/]++)(*:2625))|\\-(?|menu/delete/([^/]++)(*:2660)|room/delete/([^/]++)(*:2689)|enquiry/delete/([^/]++)(*:2721)))|anguages/(?|edit/([^/]++)(?|(*:2760))|status/([^/]++)/([^/]++)(*:2794)|delete/([^/]++)(*:2818)))|diretory/review/status/([^/]++)/([^/]++)(*:2869)|b(?|ooking(?|/(?|d(?|atatables/([^/]++)(*:2917)|elete/([^/]++)(*:2940))|status/([^/]++)/([^/]++)(*:2974))|\\-message/([^/]++)(?|(*:3005)))|log/(?|edit/([^/]++)(?|(*:3039))|delete/([^/]++)(*:3064)|category/(?|edit/([^/]++)(?|(*:3101))|delete/([^/]++)(*:3126)))|artner/(?|edit/([^/]++)(?|(*:3163))|delete/([^/]++)(*:3188)))|user(?|s/(?|edit/([^/]++)(?|(*:3227))|de(?|lete/([^/]++)(*:3255)|posit/([^/]++)(*:3278))|ban/([^/]++)/([^/]++)(*:3309)|kyc/([^/]++)/([^/]++)(*:3339))|/(?|([^/]++)/show(*:3366)|deposit/([^/]++)(*:3391)))|SubscriberUser/(?|edit/([^/]++)(?|(*:3436))|delete/([^/]++)(*:3461)|([^/]++)/show(*:3483)|ban/([^/]++)/([^/]++)(*:3513)|deposit/([^/]++)(?|(*:3541)))|taxes/(?|edit/([^/]++)(*:3574)|status/([^/]++)/([^/]++)(*:3607)|update/([^/]++)(*:3631)|delete/([^/]++)(*:3655))|general\\-settings/(?|status/([^/]++)/([^/]++)(*:3710)|currency/([^/]++)(*:3736)|language/([^/]++)(*:3762))|m(?|ission/(?|edit/([^/]++)(?|(*:3802))|delete/([^/]++)(*:3827))|essage/(?|([^/]++)(?|(*:3858)|/delete(*:3874))|post(*:3888)|load/([^/]++)(*:3910))|anage\\-kyc\\-form/([^/]++)(?|(*:3948)))|r(?|eview/(?|edit/([^/]++)(?|(*:3988))|delete/([^/]++)(*:4013))|ole/(?|edit/([^/]++)(?|(*:4046))|delete/([^/]++)(*:4071)))|s(?|artner/(?|edit/([^/]++)(?|(*:4112))|delete/([^/]++)(*:4137))|ms\\-templates/([^/]++)(?|(*:4172))|taff/(?|edit/([^/]++)(*:4203)|update/([^/]++)(*:4227)|delete/([^/]++)(*:4251))|ocial(?|\\-links/(?|edit/([^/]++)(*:4293)|update/([^/]++)(*:4317)|delete/([^/]++)(*:4341)|status/([^/]++)/([^/]++)(*:4374))|/(?|facebook/([^/]++)(*:4405)|google/([^/]++)(*:4429)))|itemap/([^/]++)/(?|update(*:4465)|delete(*:4480)))|home_banner_advertisement/(?|edit/([^/]++)(?|(*:4536))|delete/([^/]++)(*:4561))|email\\-templates/([^/]++)(?|(*:4599))|kyc\\-info/(?|([^/]++)(*:4630)|user/([^/]++)(*:4652)))|/user/(?|register/verify/([^/]++)(*:4696)|username/([^/]++)(*:4722)|a(?|nalytics/([^/]++)(*:4752)|dmin/message/([^/]++)/delete(*:4789))|listing/(?|edit/([^/]++)(*:4823)|update/([^/]++)(*:4847)|delete/([^/]++)(*:4871))|s(?|aved/listing/([^/]++)(*:4906)|upport\\-tickets/conversation/([^/]++)(*:4952))|booking/(?|status/([^/]++)/([^/]++)(*:4997)|conversation/([^/]++)(?|(*:5030)))|package/subscription/([^/]++)(*:5070)))/?$}sDu',
    ),
    3 => 
    array (
      46 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Rd6zI9ksXq9IFVR',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      72 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cMq69xRrxcfq8SAT',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      98 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c9kTFsoViC3CSqgr',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::79V6TQ9IULdrARFm',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WOBv5dfhkTQoQlzj',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MIcrDCPgq50vbCnu',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7k0w3FCDul65w5mZ',
          ),
          1 => 
          array (
            0 => 'keyword',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yBTzi8vRRhjKZviN',
          ),
          1 => 
          array (
            0 => 'keybord',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TCJqLtPmytsmQoKN',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1gtTXJLbzoIEfttJ',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IMDZ2zVgPcwm73nM',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3tv8zxK221NQDthH',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F6A9FwS9HEGM1ChN',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fNDrlBVGURjwjNTt',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ALBPBRPidpdA1401',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NP8IiWfmHlUfbsJy',
          ),
          1 => 
          array (
            0 => 'highlight_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pBSipuYcv68jLx7o',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.author.details',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.subcat',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.switch',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.listing.details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.property.wishlist',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.listing.review',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogcategory',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogtags',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.blogarchive',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.page',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.subscriber',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.currency',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.language',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change.token',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.currency.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partner.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partner.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partner.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.prod.popular',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.amenities.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisewithus.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.st',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tlang.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.areas.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1938 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.process.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.process.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.account.process.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.appadds.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.appadds.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.appadds.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2066 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.foodtype.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.font.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.locations.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.datatables',
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.faq.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.menu.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.listing.room.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.enquiry.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2794 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.st',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.diretory.review.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.booking.datatables',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.booking.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.booking.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.booking.message',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.booking.message.submit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cblog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cblog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cblog.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bartner.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bartner.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.bartner.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-deposit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-ban',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.kyc',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-user-deposit-update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-ban',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-deposit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin-SubscriberUser-deposit-update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.taxes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.status',
          ),
          1 => 
          array (
            0 => 'field',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.iscurrency',
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gs.islanguage',
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mission.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mission.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mission.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.message.store',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin-message-load',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage.kyc.user',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VVL9GTDzCzaVMRrD',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4046 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sartner.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sartner.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sartner.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sms.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sms.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.staff.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.links.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.facebookup',
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social.googleup',
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.sitemap.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home_banner_advertisement.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home_banner_advertisement.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home_banner_advertisement.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mail.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.mail.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.info',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.kyc.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.register.token',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.username',
          ),
          1 => 
          array (
            0 => 'number',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.analytics.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.message.delete1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.listing.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.saved.listing.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4952 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.message.conversation',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.booking.status',
          ),
          1 => 
          array (
            0 => 'id1',
            1 => 'id2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.booking.conversation',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.booking.conversation.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5070 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.package.subscription',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::iVOdtthGGOaJIFGi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006a70000000000000000";}";s:4:"hash";s:44:"RDL3CQEJaUGBtDgUBkmpCdew7TUAd1KdoAk6DLt3i+M=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iVOdtthGGOaJIFGi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Fk3j1blcoQeXxej' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@login',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6Fk3j1blcoQeXxej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7Rd6zI9ksXq9IFVR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/edituser/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@edituser',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@edituser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7Rd6zI9ksXq9IFVR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cMq69xRrxcfq8SAT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/updateuser/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@updateuser',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@updateuser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cMq69xRrxcfq8SAT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c9kTFsoViC3CSqgr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/deleteUser/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@deleteUser',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@deleteUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::c9kTFsoViC3CSqgr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1emt9448yE7qK3OO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/registerapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@register',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1emt9448yE7qK3OO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YFBvQukjlTVTcYXK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/send-reset-password-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'PasswordResetController@send_reset_password_email',
        'controller' => 'PasswordResetController@send_reset_password_email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::YFBvQukjlTVTcYXK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::79V6TQ9IULdrARFm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'PasswordResetController@reset',
        'controller' => 'PasswordResetController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::79V6TQ9IULdrARFm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v53XUyHz4Nvx3ng1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@logout',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::v53XUyHz4Nvx3ng1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HVxi7vGdX6ToTsFS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/loggeduser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@logged_user',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@logged_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::HVxi7vGdX6ToTsFS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WOBv5dfhkTQoQlzj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/changepassword/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@change_password',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@change_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::WOBv5dfhkTQoQlzj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Hx6dKvj1tCHEzPO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4Hx6dKvj1tCHEzPO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => 'admin/login',
        'status' => 302,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front-maintenance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'under-maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@maintenance',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@maintenance',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front-maintenance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@searching_item',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@searching_item',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search_cat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search_cat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_searching_item',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_searching_item',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search_cat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.subcat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subcat/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@subcategory',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@subcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.subcat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T8ipiNpEOXcVizFL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cat_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::T8ipiNpEOXcVizFL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0kLvaUdMpQKjbeL3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@map',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@map',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0kLvaUdMpQKjbeL3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7k0w3FCDul65w5mZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search/{keyword}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7k0w3FCDul65w5mZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W5in6ijhixT4QUwI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cat_search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W5in6ijhixT4QUwI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7aB7OUu2IJ4Bxlhj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@apicall',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@apicall',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7aB7OUu2IJ4Bxlhj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OlQeTNyPxJFRmul9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/allcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allcategoryapi',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allcategoryapi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OlQeTNyPxJFRmul9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1gtTXJLbzoIEfttJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/allsubcategoryapi/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allsubcategoryapi',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allsubcategoryapi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1gtTXJLbzoIEfttJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GFy5XP0BpHlBfYh3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/allproduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allproduct_slug',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allproduct_slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GFy5XP0BpHlBfYh3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IMDZ2zVgPcwm73nM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/allproduct/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allproduct_slug',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@allproduct_slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IMDZ2zVgPcwm73nM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3tv8zxK221NQDthH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product-detail/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@product_detail',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@product_detail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3tv8zxK221NQDthH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F6A9FwS9HEGM1ChN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product-lishting/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@lishting',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@lishting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::F6A9FwS9HEGM1ChN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5HicmlppZgfQcEFL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product-lishting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@lishting',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@lishting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5HicmlppZgfQcEFL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pKENfOB8q1wmMwbe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/alllogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pKENfOB8q1wmMwbe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MIcrDCPgq50vbCnu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/userprofile/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@userprofile',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@userprofile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MIcrDCPgq50vbCnu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fNDrlBVGURjwjNTt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cms/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cms_contant',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@cms_contant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fNDrlBVGURjwjNTt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RQng4fZeagpTY1vz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contactmailapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@contactmailapi',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@contactmailapi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RQng4fZeagpTY1vz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ALBPBRPidpdA1401' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wishlistapi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@wishlistapi',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@wishlistapi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ALBPBRPidpdA1401',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L38i2UAslU3dNqqx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wishlistapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@wishlistpostapi',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@wishlistpostapi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::L38i2UAslU3dNqqx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::awxrYaNFSWtFl7jw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/removewishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@removewishlistpostapi',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@removewishlistpostapi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::awxrYaNFSWtFl7jw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yBTzi8vRRhjKZviN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search_filter/{keybord}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search_filter',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search_filter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yBTzi8vRRhjKZviN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NP8IiWfmHlUfbsJy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/highlight/{highlight_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filter_highlight_type',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filter_highlight_type',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NP8IiWfmHlUfbsJy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WD71cyiu8zRy0FhV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/postreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@postreview',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@postreview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WD71cyiu8zRy0FhV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3j2uZIVkjHzmZNbU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search_api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search_api',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search_api',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3j2uZIVkjHzmZNbU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TCJqLtPmytsmQoKN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search_api/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search_api',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@search_api',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TCJqLtPmytsmQoKN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eFMqEq5Hqo7TuCvA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/SubCat_search_api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@SubCat_search_api',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@SubCat_search_api',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eFMqEq5Hqo7TuCvA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wMtWhmkTVryMYyim' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/filterallproduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filterallproduct',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filterallproduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wMtWhmkTVryMYyim',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pBSipuYcv68jLx7o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lang/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@language',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@language',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pBSipuYcv68jLx7o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6L1YCMINnHBv3OOO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/highlight_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filterallproduct',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filterallproduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6L1YCMINnHBv3OOO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bzZAAXRn2AAdNbpS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/appaddsdata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@appaddsdata',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@appaddsdata',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bzZAAXRn2AAdNbpS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/telr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkout.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NSqKruuVCoGvljrO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'authorised',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@authorised',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@authorised',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NSqKruuVCoGvljrO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::woLmxHW21tZeFoj3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@cancel',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::woLmxHW21tZeFoj3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xdR2cDzBYusZrYF8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'declined',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@declined',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CheckoutController@declined',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xdR2cDzBYusZrYF8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.ar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.ar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.en' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.en',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'as' => 'lang.switch',
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\LanguageController@switchLang',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\LanguageController@switchLang',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filter',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@filter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@listing',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.listing.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@listingDetails',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@listingDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.listing.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.property.wishlist' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing/wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@wishlist',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@wishlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.property.wishlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.author.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'author/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@authorDetails',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@authorDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.author.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.listing.enquiry' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@listingEnquiry',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@listingEnquiry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.listing.enquiry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.listing.review' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'listing/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@review',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@review',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.listing.review',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.property.follow' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'follow',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@follow',
        'controller' => 'App\\Http\\Controllers\\Frontend\\DirectoryController@follow',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.property.follow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blog',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogdetails',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogdetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogsearch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogsearch',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogsearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.blogsearch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/category/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogcategory',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogcategory',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.blogcategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogtags' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/tag/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogtags',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogtags',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.blogtags',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.blogarchive' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/archive/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogarchive',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@blogarchive',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.blogarchive',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pricing-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@plans',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@plans',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@contact',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.contact.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@contactemail',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@contactemail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.contact.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.advertisewithus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'advertise_with_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@advertise_with_us',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@advertise_with_us',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.advertisewithus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.advertisewithus.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'advertise_with_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@advertise_with_us_email',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@advertise_with_us_email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.advertisewithus.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@faq',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@faq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@page',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.subscriber' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscriber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@subscriber',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@subscriber',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.subscriber',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.currency' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@currency',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@currency',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.currency',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'language/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@language',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@language',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.signup.session' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signup-session/flus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@signupSession',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@signupSession',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.signup.session',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.profit.send' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profit/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@profitSend',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@profitSend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.profit.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cache.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cache/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:495:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:276:"function() {
        \\Artisan::call(\'cache:clear\');
        \\Artisan::call(\'config:clear\');
        \\Artisan::call(\'route:clear\');
        \\Artisan::call(\'view:clear\');
        return \\redirect()->route(\'admin.dashboard\')->with(\'cache\',\'System Cache Has Been Removed.\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006f90000000000000000";}";s:4:"hash";s:44:"cKs89yRGqwj7V9/FmNswToJS9O+ebUnV0LxvB1NV0W4=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cache.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.login.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forgot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@showForgotForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@showForgotForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forgot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forgot.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/forgot-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@forgot',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@forgot',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.forgot.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change.token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/change-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@showChangePassForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@showChangePassForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.change.token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@changepass',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@changepass',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.change.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@profile',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@profileupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@profileupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@passwordreset',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@passwordreset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@changepass',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@changepass',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.menubuilder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menu-builder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Builder',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@menubuilder',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@menubuilder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.menubuilder',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plans/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Plan',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.plans.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Categories',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/amenities/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/amenities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/amenities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/amenities/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/amenities/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/amenities/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/amenities/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/amenities/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.amenities.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/amenities/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Amenities',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AmenityController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AmenityController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.amenities.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/foodtype/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/foodtype',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/foodtype/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/foodtype/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/foodtype/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/foodtype/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/foodtype/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/foodtype/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.foodtype.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/foodtype/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Foodtype',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FoodtypeController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.foodtype.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locations/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locations/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/locations/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locations/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/locations/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locations/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.locations.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/locations/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Locations',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LocationController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\LocationController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.locations.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/datatables/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.pending' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pending-listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@pending',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@pending',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.pending',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/approved-listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@approved',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@approved',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@type',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@type',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listing/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/listing/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.menu.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing-menu/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@menuDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@menuDestroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.menu.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.room.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing-room/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@roomDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@roomDestroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.room.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.faq.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@faqDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@faqDestroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.faq.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ListingController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ListingController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gallery.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GalleryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\GalleryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gallery.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gallery.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gallery/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GalleryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\GalleryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gallery.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gallery.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gallery/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Listing',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GalleryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\GalleryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gallery.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.diretory.review.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/diretory/review/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Reviews',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiretoryReviewController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiretoryReviewController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.diretory.review.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.diretory.review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/diretory/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Reviews',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiretoryReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiretoryReviewController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.diretory.review.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.diretory.review.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/diretory/review/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Reviews',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiretoryReviewController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiretoryReviewController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.diretory.review.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.booking.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/booking/datatables/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.booking.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.hotel.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/hotel-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@hotel',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@hotel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.hotel.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.restaurant.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/restaurant-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@restaurant',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@restaurant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.restaurant.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.beauty.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/beauty-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@beauty',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@beauty',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.beauty.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.booking.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/booking/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.booking.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.booking.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/booking/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.booking.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.booking.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/booking/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.booking.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.booking.message' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/booking-message/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@message',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.booking.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.booking.message.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/booking-message/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Booking Request',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@messageSubmit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BookingRequestController@messageSubmit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.booking.message.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.enquiry.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing-enquiry/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Enquiry',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.enquiry.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.enquiry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Enquiry',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.enquiry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.enquiry.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing-enquiry/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Enquiry',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.enquiry.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.listing.enquiry.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/listing-enquiry/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Directory Enquiry',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.listing.enquiry.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisewithus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisewithus-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertiseWithUsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertiseWithUsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisewithus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisewithus.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisewithus-enquiry/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertiseWithUsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertiseWithUsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisewithus.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisewithus.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisewithus-enquiry/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertiseWithUsController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertiseWithUsController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.advertisewithus.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/areas/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/areas/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/areas/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/areas/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/areas/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/areas/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/areas/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.areas.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/areas/bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AreaController@bulkdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AreaController@bulkdelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.areas.bulk.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.bonus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/bonus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BonusController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BonusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.bonus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bonus.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BonusController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BonusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bonus.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-ban' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/ban/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@ban',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@ban',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-ban',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/default/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@image',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@image',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-deposit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/deposit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@deposit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@deposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-deposit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-user-deposit-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/deposit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@depositUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@depositUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-user-deposit-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.balance.add.deduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/user/balance/add/deduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage User',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@adddeduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@adddeduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.balance.add.deduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.SubscriberUser.bonus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/bonus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BonusController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BonusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.SubscriberUser.bonus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.SubscriberUser.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/SubscriberUser/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BonusController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BonusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.SubscriberUser.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.SubscriberUser.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.SubscriberUser.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/SubscriberUser/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-ban' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/ban/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@ban',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@ban',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-ban',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/default/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@image',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@image',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-deposit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/SubscriberUser/deposit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@deposit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@deposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-deposit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-SubscriberUser-deposit-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/SubscriberUser/deposit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@depositUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@depositUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-SubscriberUser-deposit-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.SubscriberUser.balance.add.deduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/SubscriberUser/balance/add/deduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Subscriber',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@adddeduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserSubscriberController@adddeduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.SubscriberUser.balance.add.deduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transactions/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Transactions',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.transactions.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.transactions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Transactions',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TransactionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.transactions.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cblog.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/category/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cblog.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cblog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cblog.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cblog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cblog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cblog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cblog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cblog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cblog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cblog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cblog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cblog.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Blog',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogCategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.cblog.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/taxes/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/taxes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/taxes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/taxes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/taxes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/taxes/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/taxes/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.taxes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/taxes/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.taxes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.logo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logo',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@logo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.fav' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/favicon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@fav',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@fav',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.fav',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.load' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/loader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@load',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@load',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.load',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/update/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@generalupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@generalupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.contents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/contents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@contents',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@contents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.contents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.moneytransfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/moneytransfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@moneytransfer',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@moneytransfer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.moneytransfer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.theme' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@theme',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@theme',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.theme',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.customcss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@customcss',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@customcss',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.customcss',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.customcss.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@customcssSubmit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@customcssSubmit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.customcss.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.breadcumb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/breadcumb',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@breadcumb',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@breadcumb',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.breadcumb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/status/{field}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.footer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@footer',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@footer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.footer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.affilate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/affilate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@affilate',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@affilate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.affilate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.error.banner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/error-banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@errorbanner',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@errorbanner',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.error.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.popup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/popup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@popup',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@popup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.popup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/manage-cookie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@cookie',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@cookie',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.maintenance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@maintain',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@maintain',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.maintenance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.twilio' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/twilio-sms-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@twilio',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@twilio',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.twilio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.nexmo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/nexmo-sms-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:General Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@nexmo',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@nexmo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.nexmo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.process.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/process/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.process.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.process.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.process.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.process.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/process/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.process.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.process.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/process/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.process.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.process.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account/process/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.process.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.process.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/account/process/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.process.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.account.process.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account/process/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AccountProcessController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.account.process.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mission.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mission/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MissionController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\MissionController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mission.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mission.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MissionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MissionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mission.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mission/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MissionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\MissionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mission.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mission/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MissionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\MissionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mission.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mission/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MissionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MissionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mission.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mission.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mission/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MissionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MissionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mission.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mission.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/mission/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MissionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mission.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.review.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.review.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.review.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.review.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/review/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.review.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/review/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.review.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReviewController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.review.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partner.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partner/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PartnerController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\PartnerController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partner.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PartnerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PartnerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partner.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partner/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PartnerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PartnerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partner.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PartnerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PartnerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partner.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partner/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PartnerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PartnerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partner.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PartnerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PartnerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partner.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partner.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partner/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PartnerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PartnerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partner.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.appadds.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appadds/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppaddsController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppaddsController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.appadds.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.appadds.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appadds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppaddsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppaddsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.appadds.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.appadds.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appadds/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppaddsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppaddsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.appadds.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.appadds.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appadds/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppaddsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppaddsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.appadds.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.appadds.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appadds/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppaddsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppaddsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.appadds.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.appadds.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/appadds/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppaddsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppaddsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.appadds.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.appadds.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/appadds/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AppaddsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AppaddsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.appadds.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bartner.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bartner/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BartnerController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\BartnerController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bartner.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bartner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bartner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BartnerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BartnerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bartner.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bartner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bartner/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BartnerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BartnerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bartner.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bartner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bartner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BartnerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BartnerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bartner.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bartner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bartner/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BartnerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BartnerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bartner.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bartner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/bartner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BartnerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BartnerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bartner.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.bartner.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/bartner/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BartnerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BartnerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.bartner.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sartner.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sartner/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SartnerController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\SartnerController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sartner.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sartner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sartner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SartnerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SartnerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sartner.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sartner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sartner/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SartnerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SartnerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sartner.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sartner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sartner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SartnerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SartnerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sartner.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sartner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sartner/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SartnerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SartnerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sartner.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sartner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sartner/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SartnerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SartnerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sartner.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sartner.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sartner/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SartnerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SartnerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sartner.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home_banner_advertisement.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home_banner_advertisement/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home_banner_advertisement.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home_banner_advertisement.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home_banner_advertisement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home_banner_advertisement.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home_banner_advertisement.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home_banner_advertisement/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home_banner_advertisement.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home_banner_advertisement.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home_banner_advertisement/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home_banner_advertisement.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home_banner_advertisement.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/home_banner_advertisement/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home_banner_advertisement.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home_banner_advertisement.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/home_banner_advertisement/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home_banner_advertisement.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home_banner_advertisement.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home_banner_advertisement/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeBannerAdvertisementController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home_banner_advertisement.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.hero' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/hero',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@hero',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@hero',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.hero',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.customization' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/homepage/customization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@customization',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@customization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.customization',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.customization.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/homepage/customization/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@customizationUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@customizationUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.customization.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@about',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@about',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/listing-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@listing',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/download-apps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@download',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.call' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/call-to-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@calltoaction',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@calltoaction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.call',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.heading' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/section/heading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@sectionHeading',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@sectionHeading',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.heading',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.contactupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-settings/contact/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@contactupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@contactupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.contactupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page-settings/update/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Home Page Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mail.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-templates/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Email Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mail.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mail.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Email Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mail.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mail.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-templates/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Email Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mail.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mail.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/email-templates/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Email Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mail.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.mail.config' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/email-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Email Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailController@config',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailController@config',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.mail.config',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.group.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/groupemail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Email Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailController@groupemail',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailController@groupemail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.group.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.group.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/groupemailpost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Email Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailController@groupemailpost',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailController@groupemailpost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.group.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sms.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sms-templates/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SMSController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\SMSController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sms.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sms.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sms-templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SMSController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SMSController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sms.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sms.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sms-templates/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SMSController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SMSController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sms.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sms.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sms-templates/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SMSController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SMSController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sms.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/send/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Message',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@usercontact',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@usercontact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.message' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Message',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/messages/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Message',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.message.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/message/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Message',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@message',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.message.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/message/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Message',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@messagedelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@messagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.message.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/message/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Message',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@postmessage',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@postmessage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.message.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-message-load' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/message/load/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Message',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@messageshow',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@messageshow',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-message-load',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/paymentgateway/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/paymentgateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/paymentgateway/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/paymentgateway/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/paymentgateway/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/paymentgateway/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/paymentgateway/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/paymentgateway/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentGatewayController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.payment.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.iscurrency' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/currency/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currency',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@currency',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.iscurrency',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currency/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/currency/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.currency.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/currency/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Payment Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CurrencyController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\CurrencyController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.currency.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.role.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.role.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/staff/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.staff.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.staff.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/staff/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.staff.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/staff/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.staff.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/staff/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.staff.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/staff/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.staff.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.staff.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/staff/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage Staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.staff.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage.kyc.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-kyc/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.manage.kyc.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage.kyc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-kyc-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.manage.kyc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage.module' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-kyc-module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@module',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@module',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.manage.module',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage.module.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage-kyc-module/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@moduleUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@moduleUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.manage.module.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage.kyc.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-kyc-form/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@userKycForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@userKycForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.manage.kyc.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VVL9GTDzCzaVMRrD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage-kyc-form/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VVL9GTDzCzaVMRrD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.form.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/kyc-form/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycFormUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycFormUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.kyc.form.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.form.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/kyc-form/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@deletedField',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@deletedField',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.kyc.form.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/kyc-info/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycInfo',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycInfo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.kyc.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.kyc.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/kyc-info/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@kycDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.kyc.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.kyc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/kyc/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Manage KYC Form',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\KycManageController@kyc',
        'controller' => 'App\\Http\\Controllers\\Admin\\KycManageController@kyc',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.kyc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gs.islanguage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general-settings/language/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@language',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralSettingController@language',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.gs.islanguage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/languages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.st' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.st',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/languages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.lang.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminlanguages/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminlanguages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminlanguages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminlanguages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminlanguages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminlanguages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.st' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminlanguages/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.st',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tlang.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminlanguages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Language Manage',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminLanguageController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.tlang.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fonts/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/fonts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/font/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/font/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/font/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/font/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/font/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.font.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/font/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Fonts',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FontController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FontController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.font.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page-settings/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@contact',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/page/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.page.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.ps.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login-registration/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Menu Page Settings',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PageSettingController@loginpage',
        'controller' => 'App\\Http\\Controllers\\Admin\\PageSettingController@loginpage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.ps.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.seotool.analytics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/seotools/analytics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoToolController@analytics',
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoToolController@analytics',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.seotool.analytics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.seotool.analytics.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/seotools/analytics/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoToolController@analyticsupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoToolController@analyticsupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.seotool.analytics.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.seotool.keywords' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/seotools/keywords',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoToolController@keywords',
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoToolController@keywords',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.seotool.keywords',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.seotool.keywords.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/seotools/keywords/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoToolController@keywordsupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoToolController@keywordsupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.seotool.keywords.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.prod.popular' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/products/popular/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SeoToolController@popular',
        'controller' => 'App\\Http\\Controllers\\Admin\\SeoToolController@popular',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.prod.popular',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-links/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-links/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-links/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-links/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-links/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-links/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.links.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-links/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Seo Tools',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@status',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLinkController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.links.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Sitemaps',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SitemapController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\SitemapController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Sitemaps',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SitemapController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SitemapController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Sitemaps',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SitemapController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SitemapController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sitemap/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Sitemaps',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SitemapController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SitemapController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Sitemaps',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SitemapController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SitemapController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/sitemap/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Sitemaps',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SitemapController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SitemapController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.sitemap.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/sitemap/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Sitemaps',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SitemapController@download',
        'controller' => 'App\\Http\\Controllers\\Admin\\SitemapController@download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.sitemap.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subs.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Subscribers',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@datatables',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@datatables',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.subs.datatables',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Subscribers',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.subs.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subs.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribers/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Subscribers',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriberController@download',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriberController@download',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.subs.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Social Setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Social Setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@socialupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@socialupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.update.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social/update/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Social Setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@socialupdateall',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@socialupdateall',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.update.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.facebook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Social Setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@facebook',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@facebook',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.facebook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.google' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Social Setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@google',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@google',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.google',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.facebookup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social/facebook/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Social Setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@facebookup',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@facebookup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.facebookup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social.googleup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social/google/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'permissions:Social Setting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@googleup',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialSettingController@googleup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.social.googleup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-move-script' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/check/movescript',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@movescript',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@movescript',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-move-script',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-generate-backup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/generate/backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@generate_bkup',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@generate_bkup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-generate-backup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-activation-form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@activation',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@activation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-activation-form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-activate-purchase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@activation_submit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@activation_submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-activate-purchase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin-clear-backup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/clear/backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@clear_bkup',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@clear_bkup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin-clear-backup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\User\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\User\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.login.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forgot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ForgotController@showforgotform',
        'controller' => 'App\\Http\\Controllers\\User\\ForgotController@showforgotform',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.forgot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.forgot.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ForgotController@forgot',
        'controller' => 'App\\Http\\Controllers\\User\\ForgotController@forgot',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.forgot.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.otp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\OTPController@showotpForm',
        'controller' => 'App\\Http\\Controllers\\User\\OTPController@showotpForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.otp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.otp.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\OTPController@otp',
        'controller' => 'App\\Http\\Controllers\\User\\OTPController@otp',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.otp.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RegisterController@showRegisterForm',
        'controller' => 'App\\Http\\Controllers\\User\\RegisterController@showRegisterForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\User\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.register.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register.token' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/register/verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\RegisterController@token',
        'controller' => 'App\\Http\\Controllers\\User\\RegisterController@token',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.register.token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.username' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/username/{number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@username',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@username',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.username',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.transaction' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@transaction',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@transaction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.transaction',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.show2faForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/2fa-security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@showTwoFactorForm',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@showTwoFactorForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.show2faForm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.createTwoFactor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/createTwoFactor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@createTwoFactor',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@createTwoFactor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.createTwoFactor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.disableTwoFactor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/disableTwoFactor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@disableTwoFactor',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@disableTwoFactor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.disableTwoFactor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.analytics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/listing/analytics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@analytics',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@analytics',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.analytics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.analytics.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@analyticsDetails',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@analyticsDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.analytics.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@profileupdate',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@profileupdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kyc.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/kyc-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\KYCController@kycform',
        'controller' => 'App\\Http\\Controllers\\User\\KYCController@kycform',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.kyc.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.kyc.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/kyc-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\KYCController@kyc',
        'controller' => 'App\\Http\\Controllers\\User\\KYCController@kyc',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.kyc.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/listing/type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@type',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@type',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/listing/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@create',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/listing/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@store',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/listing/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/listing/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@update',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.saved.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/saved/listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@saved_listing',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@saved_listing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.saved.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.saved.listing.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/saved/listing/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@savedDelete',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@savedDelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.saved.listing.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.listing.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/listing/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ListingController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ListingController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.listing.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.gallery.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/gallery/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GalleryController@show',
        'controller' => 'App\\Http\\Controllers\\User\\GalleryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.gallery.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.gallery.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/gallery/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GalleryController@store',
        'controller' => 'App\\Http\\Controllers\\User\\GalleryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.gallery.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.gallery.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/gallery/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\GalleryController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\GalleryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.gallery.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.booking.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/booking/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingController@store',
        'controller' => 'App\\Http\\Controllers\\User\\BookingController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.booking.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.my.booking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/my-bookings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingController@myBooking',
        'controller' => 'App\\Http\\Controllers\\User\\BookingController@myBooking',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.my.booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.booking.hotel.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/hotel/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingRequestController@hotel',
        'controller' => 'App\\Http\\Controllers\\User\\BookingRequestController@hotel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.booking.hotel.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.booking.restaurant.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/restaurant/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingRequestController@restaurant',
        'controller' => 'App\\Http\\Controllers\\User\\BookingRequestController@restaurant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.booking.restaurant.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.booking.beauty.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/beauty/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingRequestController@beauty',
        'controller' => 'App\\Http\\Controllers\\User\\BookingRequestController@beauty',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.booking.beauty.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.booking.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/booking/status/{id1}/{id2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingRequestController@status',
        'controller' => 'App\\Http\\Controllers\\User\\BookingRequestController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.booking.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.booking.conversation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/booking/conversation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingRequestController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\BookingRequestController@conversation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.booking.conversation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.booking.conversation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/booking/conversation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\BookingRequestController@conversationStore',
        'controller' => 'App\\Http\\Controllers\\User\\BookingRequestController@conversationStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.booking.conversation.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.customer.enquiry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/customer-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\EnquiryController@customerEnquiry',
        'controller' => 'App\\Http\\Controllers\\User\\EnquiryController@customerEnquiry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.customer.enquiry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.my.enquiry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/my-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\EnquiryController@myEnquiry',
        'controller' => 'App\\Http\\Controllers\\User\\EnquiryController@myEnquiry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.my.enquiry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.pricing.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SubscriptionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.pricing.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referrals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
          3 => 'kyc:Deposits',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@referred',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@referred',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.commissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral-commissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
          3 => 'kyc:Deposits',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@commissions',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@commissions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.commissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.message.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support-tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MessageController@index',
        'controller' => 'App\\Http\\Controllers\\User\\MessageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.message.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.message.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support-tickets/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MessageController@store',
        'controller' => 'App\\Http\\Controllers\\User\\MessageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.message.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.message.conversation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support-tickets/conversation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MessageController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\MessageController@conversation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.message.conversation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.message.delete1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/admin/message/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MessageController@adminmessagedelete',
        'controller' => 'App\\Http\\Controllers\\User\\MessageController@adminmessagedelete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.message.delete1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.change.password.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@changePasswordForm',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@changePasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.change.password.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.change.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@changePassword',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@changePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.change.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.package.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SubscriptionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.package.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.package.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/package/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SubscriptionController@subscription',
        'controller' => 'App\\Http\\Controllers\\User\\SubscriptionController@subscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.package.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.stripe.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/stripe-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\StripeController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\StripeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.stripe.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.free.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/free',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\User\\SubscriptionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.free.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.paypal.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/paypal-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\PaypalController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\PaypalController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.paypal.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.paypal.notify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/subscription/paypal/deposit/notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\PaypalController@notify',
        'controller' => 'App\\Http\\Controllers\\Subscription\\PaypalController@notify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.paypal.notify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.paypal.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/subscription/paypal/deposit/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\PaypalController@cancel',
        'controller' => 'App\\Http\\Controllers\\Subscription\\PaypalController@cancel',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.paypal.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.instamojo.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/instamojo-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\InstamojoController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\InstamojoController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.instamojo.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.instamojo.notify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/subscription/instamojo-notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\InstamojoController@notify',
        'controller' => 'App\\Http\\Controllers\\Subscription\\InstamojoController@notify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.instamojo.notify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.paytm.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/paytm-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\PaytmController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\PaytmController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.paytm.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.paytm.notify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/paytm-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\PaytmController@paytmCallback',
        'controller' => 'App\\Http\\Controllers\\Subscription\\PaytmController@paytmCallback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.paytm.notify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.razorpay.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/razorpay-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\RazorpayController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\RazorpayController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.razorpay.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.razorpay.notify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/razorpay-notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\RazorpayController@notify',
        'controller' => 'App\\Http\\Controllers\\Subscription\\RazorpayController@notify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.razorpay.notify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.molly.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/molly-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\MollieController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\MollieController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.molly.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.molly.notify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/subscription/molly-notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\MollieController@notify',
        'controller' => 'App\\Http\\Controllers\\Subscription\\MollieController@notify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.molly.notify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.flutter.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/flutter/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\FlutterwaveController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\FlutterwaveController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.flutter.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.flutter.notify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/flutter/notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\FlutterwaveController@notify',
        'controller' => 'App\\Http\\Controllers\\Subscription\\FlutterwaveController@notify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.flutter.notify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.paystack.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/paystack/submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\PaystackController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\PaystackController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.paystack.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.authorize.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/authorize-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\AuthorizeController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\AuthorizeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.authorize.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.manual.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/manual-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Subscription\\ManualController@store',
        'controller' => 'App\\Http\\Controllers\\Subscription\\ManualController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'subscription.manual.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-affilate-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/affilate/code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@affilate_code',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@affilate_code',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user-affilate-code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-notf-show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notf/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\NotificationController@user_notf_show',
        'controller' => 'App\\Http\\Controllers\\User\\NotificationController@user_notf_show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'customer-notf-show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-notf-count' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notf/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\NotificationController@user_notf_count',
        'controller' => 'App\\Http\\Controllers\\User\\NotificationController@user_notf_count',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'customer-notf-count',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer-notf-clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notf/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'otp',
          2 => 'banuser',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\NotificationController@user_notf_clear',
        'controller' => 'App\\Http\\Controllers\\User\\NotificationController@user_notf_clear',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'customer-notf-clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\User\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
