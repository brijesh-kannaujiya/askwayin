<footer class="light-footer skin-light-footer style-2">
  <div class="footer-middle">
    <div class="container">
      
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="footer_widget">
            <h4 class="widget_title">About Wayin</h4>
            <p>Welcome to Wayin, the ultimate multi-listing searching app designed to help you find exactly what you're looking for quickly and easily. We understand how important it is to have access to a comprehensive platform that offers a diverse range of listings, and that's why we've created this app to make your search process seamless and efficient.
</p><a href="https://askwayin.com/about" style="color: blue;"><?php echo app('translator')->get('Read More'); ?></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="footer_widget">
            <h4 class="widget_title">Useful Links</h4>
            <ul class="footer-menu">
              <li>
                <a href="https://askwayin.com/about"><?php echo app('translator')->get('About US'); ?></a>
              </li>
              <li>
                <a href="#"><?php echo app('translator')->get('We are Hiring'); ?></a>
              </li>
              <li>
                <a href="#"><?php echo app('translator')->get('Investor Relation'); ?></a>
              </li>
              
             
              
             
              
                            <li><a href="<?php echo e(route('front.listing')); ?>"><?php echo app('translator')->get('All Listings'); ?></a></li>
                            <li><a href="<?php echo e(route('front.plans')); ?>"><?php echo app('translator')->get('Advertise With Us'); ?></a></li>
                            <li><a href="<?php echo e(route('front.blog')); ?>"><?php echo app('translator')->get('Blogs'); ?></a></li>
                            <li><a href="<?php echo e(route('front.contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
            <li>
                <a href="https://askwayin.com/privacy"><?php echo app('translator')->get('Privacy Policy'); ?></a>
              </li>
             <li>
                <a href="https://askwayin.com/terms-conditions"><?php echo app('translator')->get('Terms & Conditions'); ?></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
          <div class="footer_widget">
            <h4 class="widget_title">Contact Details</h4>
            <!--<div class="address mt-3"> <?php echo e($ps->street); ?> <br>   <?php echo e($ps->phone); ?> <br> <?php echo e($ps->contact_email); ?> </div>-->
            <div class="address mt-3"> <?php echo app('translator')->get('<strong>Virtual World for Computer Systems & Communication Equipment Software Trading </strong> <br> Mushrif Village, Villa 45, Mirdif, <br> Dubai - United Arab Emirates '); ?><br>   <?php echo e($ps->phone); ?> <br><?php echo app('translator')->get($ps->contact_email); ?> </div>
            <div class="address mt-2">
              <ul class="list-inline">
                        <?php if($sociallinks): ?>
                        <?php $__currentLoopData = $sociallinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($social->status): ?>
                        <li class="list-inline-item">
                        <a href="<?php echo e($social->link); ?>" class="theme-cl">
                        <i class="<?php echo e($social->icon); ?>"></i>
                        </a>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
            </div>
            
            <ul class="ps-0">
                <li><a href="#"><img src="<?php echo e(asset('assets/images/gplay.png')); ?>" class="img-fluid"></a></li>
               <!--/ <li><a href="#"><img src="<?php echo e(asset('assets/images/Logos-01.svg')); ?>" class="img-fluid"></a></li>-->
                <li><a href="#"><img src="<?php echo e(asset('assets/images/astore.png')); ?>" class="img-fluid"></a></li>
            </ul>
            
          </div>
        </div>
        
         <div class="row align-items-center">
        <div class="col-lg-12 col-md-12 text-center">
         <img src="<?php echo e(asset('assets/images/Logos-01.svg')); ?>" class="img-fluid" style="width: 250px;">
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
                        <img src="<?php echo e(asset('assets/images/'.$gs->footer_logo)); ?>" class="img-footer small mb-2" alt="" />

                        <div class="address mt-2">
                            <?php echo e($ps->street); ?>

                        </div>
                        <div class="address mt-3">
                            <?php echo e($ps->phone); ?><br><?php echo e($ps->contact_email); ?>

                        </div>
                        <div class="address mt-2">
                            <ul class="list-inline">
                                <?php if($sociallinks): ?>
                                    <?php $__currentLoopData = $sociallinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($social->status): ?>
                                            <li class="list-inline-item">
                                                <a href="<?php echo e($social->link); ?>" class="theme-cl">
                                                    <i class="<?php echo e($social->icon); ?>"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title"><?php echo app('translator')->get('Main Navigation'); ?></h4>
                        <ul class="footer-menu">
                            <li><a href="<?php echo e(route('front.listing')); ?>"><?php echo app('translator')->get('Explore Listings'); ?></a></li>
                            <li><a href="<?php echo e(route('front.plans')); ?>"><?php echo app('translator')->get('Pricing Plan'); ?></a></li>
                            <li><a href="<?php echo e(route('front.blog')); ?>"><?php echo app('translator')->get('Blogs'); ?></a></li>
                            <li><a href="<?php echo e(route('front.contact')); ?>"><?php echo app('translator')->get('Contact'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title"><?php echo app('translator')->get('Helpful Topics'); ?></h4>
                        <ul class="footer-menu">
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('front.page',$page->slug)); ?>"><?php echo e($page->title); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php
                            echo $gs->copyright;
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
--><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/partials/front/footer.blade.php ENDPATH**/ ?>