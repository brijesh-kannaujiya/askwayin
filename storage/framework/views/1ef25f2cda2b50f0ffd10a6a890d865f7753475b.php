<!DOCTYPE html>
<?php
//print_r($currentLocale = app()->getLocale());
$curr_url = app()->getLocale();
if($curr_url=='1636017050KyjRNauw'){
    //DB::update("update languages set is_default = 1 where id = '1'");
    //DB::update("update languages set is_default = 0 where id = '18'");
    //$msg = 'Data Updated Successfully.';
    //dd(\DB::getQueryLog()); // Show results of log
?>

<?php $page_name = basename($_SERVER['PHP_SELF']); ?>
<html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo e($gs->title); ?></title>
    
    <link href="<?php echo e(asset('assets/front/css/styles.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/styles.php?color='.str_replace('#','',$gs->colors))); ?>">
    
    <?php if($default_font->font_value): ?>
    <!--<link href="https://fonts.googleapis.com/css?family=<?php echo e($default_font->font_value); ?>&display=swap" rel="stylesheet">-->
    <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet">
    
    <?php else: ?>
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">-->
     <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet">
    <?php endif; ?>
    
    <?php if($default_font->font_family): ?>
    <!--<link rel="stylesheet" id="colorr" href="<?php echo e(asset('assets/front/css/font.php?font_familly='.$default_font->font_family)); ?>">-->
     <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet">
    <?php else: ?>
    <link rel="stylesheet" id="colorr" href="<?php echo e(asset('assets/front/css/font.php?font_familly='."Open Sans")); ?>">
    <?php endif; ?>
<?php
}
elseif($curr_url=='1688299864oqIjFrT6'){
    
    //DB::update("update languages set is_default = 1 where id = '18'");
    //DB::update("update languages set is_default = 0 where id = '1'");
    //DB::update('update languages set is_default = ? whertre id = ?',[1,18]);
    //echo  'Data Updated Successfully.';
    //dd(\DB::getQueryLog()); // Show results of log
?>

<?php $page_name = basename($_SERVER['PHP_SELF']); ?>
    <html lang="ar" dir="rtl">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo e($gs->title); ?></title>
    
    <link href="<?php echo e(asset('assets/front/css/styles.css')); ?>" rel="stylesheet">
    
    
    <link href="<?php echo e(asset('assets/front/css/arabic_styles.css')); ?>" rel="stylesheet">
    
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/styles.php?color='.str_replace('#','',$gs->colors))); ?>">
    
    <?php if($default_font->font_family): ?>
   <link href="https://fonts.google.com/specimen/Cairo" rel="stylesheet">
   
   <style>
       .microphone
       {
           margin-left:10px;
       }
       
       span.search-tag
       {
           padding-right:10px;
       }
       
       .all-category img
       {
           margin-left:10px;
       }
       
       .header-light ul.nav-menu li a
       {
           color: #000!important;
       }
   </style>
   
   
    <?php else: ?>
    <link rel="stylesheet" id="colorr" href="<?php echo e(asset('assets/front/css/font.php?font_familly='."Open Sans")); ?>">
    <?php endif; ?>
   <?php
}
else{
 
   // DB::update("update languages set is_default = 1 where id = '1'");
   // DB::update("update languages set is_default = 0 where id = '18'");
    //$msg = 'Data Updated Successfully.';
    //dd(\DB::getQueryLog()); // Show results of log
   ?>
   
   
   <?php $page_name = basename($_SERVER['PHP_SELF']); ?>
    <html lang="en" dir="ltr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo e($gs->title); ?></title>
    
    <link href="<?php echo e(asset('assets/front/css/styles.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/styles.php?color='.str_replace('#','',$gs->colors))); ?>">
    
    <?php if($default_font->font_value): ?>
    <!--<link href="https://fonts.googleapis.com/css?family=<?php echo e($default_font->font_value); ?>&display=swap" rel="stylesheet">-->
     <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet">
    <?php else: ?>
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">-->
     <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet">
    <?php endif; ?>
    
    <?php if($default_font->font_family): ?>
    <!--<link rel="stylesheet" id="colorr" href="<?php echo e(asset('assets/front/css/font.php?font_familly='.$default_font->font_family)); ?>">-->
     <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet">
    <?php else: ?>
    <link rel="stylesheet" id="colorr" href="<?php echo e(asset('assets/front/css/font.php?font_familly='."Open Sans")); ?>">
    <?php endif; ?>
   <?php
}
?>
<!--<?php if(app()->getLocale() == 'ar'): ?>-->
<!--<html lang="ar" dir="rtl">-->
<!--    <?php else: ?>-->
<!--    <html lang="en" dir="ltr">-->
<!--        <?php endif; ?>-->
	

        <link href="<?php echo e(asset('assets/front/css/summernote.css')); ?>" rel="stylesheet" >
        <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/toastr.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/mdtimepicker.css')); ?>">
        <link href="<?php echo e(asset('assets/admin/css/tagify.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/custom.css')); ?>" />
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/'.$gs->favicon)); ?>">
        <?php echo $__env->yieldPushContent('css'); ?>

        <?php if(!empty($seo->google_analytics)): ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                    dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '<?php echo e($seo->google_analytics); ?>');
        </script>
        <?php endif; ?>
        
         <!-- for slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front/slick/slick-theme.css')); ?>"/>

    <!-- remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

    <!-- filter gallery -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front/css/gallery-filter.css')); ?>">
    
    
    <style>
    
    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf
    {
        display:none;
    }
    
    body
    {
        top:0!important;
    }
        .support-top
    {
        display:flex;
    }
    
    
    .header-light ul.nav-menu li a
       {
           color: #000!important;
       }
    
    .skiptranslate iframe
    {
        display:none;
    }
    
    .ct-language__dropdown
    {
        display: flex;
        justify-content: end;
        margin-bottom:0;}
    
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

    @media  only screen and (max-width:480px)
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
    }
    </style>
        
    </head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    

    <?php if($gs->is_loader == 1): ?>
        <div class="preloader" id="preloader" style="background: url(<?php echo e(asset('assets/images/'.$gs->loader)); ?>) no-repeat scroll center center #FFF;"></div>
    <?php endif; ?>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
            <?php if ($__env->exists('partials.front.nav')) echo $__env->make('partials.front.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <?php echo $__env->yieldContent('content'); ?>

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->


    <?php if($gs->is_cookie): ?>
        <?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>



<div class="download-app bounce2">
  <a href="#"><img src="<?php echo e(asset('assets/images/android.png')); ?>" class="img-fluid"></a>
</div>

<a id="back2Top" class="top-scroll" title="Back to top" href="#">
  <i class="ti-arrow-up"></i>
</a>
</div>


<!-- popular category modal -->
<!--<div class="modal" id="myModal">-->
<!--  <div class="modal-dialog">-->
<!--    <div class="modal-content">-->
      <!-- Modal Header -->
<!--      <div class="modal-header">-->
<!--        <div class="d-flex align-items-center">-->
<!--          <button type="button" class="btn-close me-2" data-bs-dismiss="modal"></button>-->
<!--          <h4 class="modal-title fw-bold">Popular Categories</h4>-->
<!--        </div>-->
<!--        <div>-->
<!--          <form action="" method="post">-->
<!--            <div class="input-group">-->
<!--              <input type="text" class="form-control" placeholder="Username" aria-label="Username" id="myInput" onkeyup="myFunction()" aria-describedby="basic-addon1">-->
              <!--<span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>-->
<!--            </div>-->
<!--          </form>-->
<!--        </div>-->
<!--      </div>-->
      <!-- Modal body -->
      <!--<div class="modal-body">-->
      <!--  <ul class="ps-0 style-none all-category" id="myUL">-->
            
            
       
	    		
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat2.png">-->
          <!--  <p class="mb-0">Astrologers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat3.png">-->
          <!--  <p class="mb-0">Body Massage Centers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat4.png">-->
          <!--  <p class="mb-0">Beauty Spa</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat5.png">-->
          <!--  <p class="mb-0">Car Hire</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat6.png">-->
          <!--  <p class="mb-0">Caterers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat7.png">-->
          <!--  <p class="mb-0">Chartered Accoutant</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat8.png">-->
          <!--  <p class="mb-0">Computer Training Institutes</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat9.png">-->
          <!--  <p class="mb-0">Courier Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat10.png">-->
          <!--  <p class="mb-0">Computer & Laptop Repairing</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat11.png">-->
          <!--  <p class="mb-0">Car Repair & Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat12.png">-->
          <!--  <p class="mb-0">Dermatologists</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat13.png">-->
          <!--  <p class="mb-0">Dentists</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat14.png">-->
          <!--  <p class="mb-0">Electricians</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat15.png">-->
          <!--  <p class="mb-0">Event Organizers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat16.png">-->
          <!--  <p class="mb-0">Real Estate</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat17.png">-->
          <!--  <p class="mb-0">Fabricators</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat18.png">-->
          <!--  <p class="mb-0">Furniture Repair Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat19.png">-->
          <!--  <p class="mb-0">Hospitals</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat20.png">-->
          <!--  <p class="mb-0">House Keeping Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat21.png">-->
          <!--  <p class="mb-0">Hobbies</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat22.png">-->
          <!--  <p class="mb-0">Interier Designers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat23.png">-->
          <!--  <p class="mb-0">Website Designers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat24.png">-->
          <!--  <p class="mb-0">Jewellery Showrooms</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat25.png">-->
          <!--  <p class="mb-0">Lawyers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat26.png">-->
          <!--  <p class="mb-0">Transporters</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat27.png">-->
          <!--  <p class="mb-0">Photographers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat28.png">-->
          <!--  <p class="mb-0">Nursing Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat29.png">-->
          <!--  <p class="mb-0">Printing & Publishing Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat30.png">-->
          <!--  <p class="mb-0">Placement Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat31.png">-->
          <!--  <p class="mb-0">Pest Control Services</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat32.png">-->
          <!--  <p class="mb-0">Painting Contractors</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat33.png">-->
          <!--  <p class="mb-0">Packers & Movers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat34.png">-->
          <!--  <p class="mb-0">Scrap Dealers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat35.png">-->
          <!--  <p class="mb-0">Scrap Buyers</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat36.png">-->
          <!--  <p class="mb-0">Registrations Consultants</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat37.png">-->
          <!--  <p class="mb-0">Security Systems</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat38.png">-->
          <!--  <p class="mb-0">Coacing</p>-->
          <!--</a></li>-->
          <!--<li><a href="#">-->
          <!--  <img class="me-2" src="assets/images/cat39.png">-->
          <!--  <p class="mb-0">Vocational Training</p>-->
          <!--</a></li>-->
          
      <!--  </ul>-->
      <!--</div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!-- popular category modal -->



    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('assets/front/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/summernote.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/slick.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/dropzone.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/counterup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/lightbox.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/lightbox.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jQuery.style.switcher.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/mdtimepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/tagify.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/custom.js')); ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->


    <script>
        'use strict';
		let mainurl = '<?php echo e(url('/')); ?>';
        let tawkto = '<?php echo e($gs->is_talkto); ?>';
	</script>


    <script type="text/javascript">
        if(tawkto == 1){
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/62305c801ffac05b1d7ea682/<?php echo e($gs->talkto); ?>';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        }
    </script>


    <script>
        'use strict';

        <?php if(Session::has('message')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.success("<?php echo e(session('message')); ?>");
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.warning("<?php echo e(session('warning')); ?>");
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.warning("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </script>


    <?php echo $__env->yieldPushContent('js'); ?>
    
    

<!-- for slick slider -->
<script type="text/javascript" src="<?php echo e(asset('assets/front/slick/slick.min.js')); ?>"></script>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>


<?php
if($curr_url=='1688299864oqIjFrT6'){
?>
<script type="text/javascript">
  $('.brands').slick({
    dots: false,
    navs:false,
    infinite: true,
    rtl: true,
    autoplay:true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  // for offers
  $('.offers').slick({
    dots: true,
    navs:true,
    infinite: true,
    rtl: true,
    autoplay:true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  /*$('.testimo').slick({
    dots: true,
    navs:true,
    infinite: true,
    autoplay:true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1
  });*/
  
  $('.testimo').slick({
  dots: true,
  infinite: false,
  speed: 300,
  rtl: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.slick_four').slick({
    dots: false,
    navs:false,
    infinite: true,
    autoplay:true,
    speed: 300,
    rtl: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });



</script>
<?php }else{ ?>
<script type="text/javascript">
  $('.brands').slick({
    dots: false,
    navs:false,
    infinite: true,
    autoplay:true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  // for offers
  $('.offers').slick({
    dots: true,
    navs:true,
    infinite: true,
    autoplay:true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  /*$('.testimo').slick({
    dots: true,
    navs:true,
    infinite: true,
    autoplay:true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1
  });*/
  
  $('.testimo').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



$('.slick_four').slick({
    dots: false,
    navs:false,
    infinite: true,
    autoplay:true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });





</script>
<?php } ?>
<!-- word changing -->
<script type="text/javascript">
  (function(){
      var words = [
          'Endless Possibilities',
          'and Explore Nearby Businesses'
          ], i = 0;
      setInterval(function(){
          $('#changingword').fadeOut(function(){
              $(this).html(words[i=(i+1)%words.length]).fadeIn();
          });
      }, 2000);
        
  })();
</script>


<!--<script type="text/javascript">
  function toggleText() {
    var button = document.getElementById("toggleButton");
    if (button.innerHTML === "English") {
      button.innerHTML = "Arabic";
    } else {
      button.innerHTML = "English";
    }
  }
</script>-->

  

</body>

</html>
<?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/layouts/front.blade.php ENDPATH**/ ?>