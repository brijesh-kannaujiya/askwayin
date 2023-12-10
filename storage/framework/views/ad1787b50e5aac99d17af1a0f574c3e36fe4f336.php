<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php

//dd(ceil($data->directoryRatting($data->id)));
?>
    <!-- ======================= Searchbar Banner ======================== -->
    <div class="featured-slick">
        <div class="featured-slick-slide">

            <div class="dlf-flew">
                <a href="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="mfp-gallery">
                    <img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid mx-auto" alt=""/>
                </a>
            </div>

            <?php if($data->galleries): ?>
                <?php $__currentLoopData = $data->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="dlf-flew">
                        <a href="<?php echo e(asset('assets/images/'.$gallery->photo)); ?>" class="mfp-gallery">
                            <img src="<?php echo e(asset('assets/images/'.$gallery->photo)); ?>" class="img-fluid mx-auto" alt="" />
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="Rego-ops-bhri">
            <div class="Rego-lkp-flex d-flex align-items-start justify-content-start">
                <div class="Rego-lkp-caption ps-3">
                    <div class="Rego-lkp-title"><h1 class="text-light mb-0 ft-bold"><?php echo e($data->name); ?></h4></div>
                        

                    <?php if($data->type == 'restaurant' || $data->type == 'hotel' || $data->type == 'beauty'): ?>
                        <div class="d-block mt-3">
                            <div class="list-lioe">
                                <div class="list-lioe-single ms-2 ps-3 seperate">
                                    <?php if($data->type == 'restaurant'): ?>
                                        <?php if(count($data->menus)>0): ?>
                                            <?php $__currentLoopData = $data->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="javascript:void(0);" class="text-light ft-medium"><?php echo e($menu->menu_title); ?></a>,
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if($data->type == 'hotel'): ?>
                                        <?php if(count($data->rooms)>0): ?>
                                            <?php $__currentLoopData = $data->rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="javascript:void(0);" class="text-light ft-medium"><?php echo e($room->room_name); ?></a>,
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if($data->type == 'beauty'): ?>
                                        <?php if(count($data->services)>0): ?>
                                            <?php $__currentLoopData = $data->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="javascript:void(0);" class="text-light ft-medium"><?php echo e($service->room_name); ?></a>,
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($data->openClose($data->id)=='open'): ?>
                    <div class="d-block mt-1">
                        <div class="list-lioe">
                            <div class="list-lioe-single">
                                <span class="btn text-light rounded full-width theme-bg ft-medium" style="background: green !important;"><?php echo e($data->openClose($data->id)); ?></span>
                            </div>

                        </div>
                    </div>
                    <?php else: ?>
                    <div class="d-block mt-1">
                        <div class="list-lioe">
                            <div class="list-lioe-single">
                                <span class="btn text-light rounded full-width theme-bg ft-medium"><?php echo e($data->openClose($data->id)); ?></span>
                            </div>

                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Searchbar Banner ======================== -->

    <!-- ============================ Listing Details Start ================================== -->
    <section class="gray py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <!--static 29-7-23-->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="dtl-flex">
                                    <!--<div class="dtl-logo pe-3">-->
                                    <!--    <img src="https://webnestglobal.com/client-projects/wayin/assets/images/2yHqKcTW1676288334.png" class="img-fluid" />-->
                                    <!--</div>-->
                                    <div class="jbd-details">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mt-3">
                                                    <div class="mb-3">
                                                        <h5 class="ft-bold fs-lg"><?php echo e($data->name); ?>

                                                        <!--<span class="verify"><i class="ri-checkbox-circle-fill text-success"></i> Verified</span>-->
                                                        </h5>
                                                    </div>
                                                    <div class="mb-3">
                                                        <span class="text-white bg-success p-2 rounded-2">Rating <?php echo e(ceil($data->directoryRatting($data->id))); ?></span>
                                                        <?php if(count($data->reviews)>0): ?>
                            <div class="Rego-ft-first">
                                <div class="Rego-rating">
                                    <div class="Rego-rates">
                                        <?php
                                        //dd(ceil($data->directoryRatting($data->id)));
                                       
                                       ?>

                                        <?php for($i=1; $i<=ceil($data->directoryRatting($data->id)); $i++): ?>
                                            <i class="fas fa-star active"></i>
                                        <?php endfor; ?>

                                        <?php for($i=1; $i<=(5-ceil($data->directoryRatting($data->id))); $i++): ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="Rego-price-range">
                                    <span class="ft-medium" style="color: black;
    font-size: 14px;"><?php echo e(count($data->reviews)); ?> <?php echo app('translator')->get('Reviews'); ?></span>
                                </div>
                                
                            </div>
                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-block">
                                            <ul class="ps-0 d-flex adrs">
                                                <li class="me-2" style="font-size: 17px"><a href="#"><i class="ri-map-pin-line"></i><?php echo app('translator')->get($data->real_address); ?></a></li>
                                                <!--<li class="me-2"><a href="#"><i class="ri-time-line"></i> <span class="text-success"><?php echo e($data->openClose($data->id)); ?></span></a></li>-->
                                                <li><a href="#"></a></li>
                                            </ul>
                                        <!--    <p><?php-->
                                        <!--    echo $data->description;-->
                                        <!--?></p>-->
                                            <ul class="ps-0 d-flex btn-type">
                                                <li style="background: #339d3a;border: solid 1px#027c0a;"><a href="#" style="color:white;"><i class="ri-phone-line"></i> <?php echo e($ps->phone); ?></a></li>
                                                <li><a href="https://api.whatsapp.com/send?phone=<?php echo e($ps->phone); ?>&text=Hello"><i class="ri-whatsapp-line"></i> <b>Whatsapp</b></a></li>
                                                <li><a href="#"><i class="ri-share-forward-fill"></i> <b>Share</b></a></li>
                                                <li><a href="#"><i class="ri-pencil-fill"></i> <b>Edit</b></a></li>
                                                 <li><a href="<?php echo e(route('front.plans')); ?>"><i class="ri-verified-badge-line"></i> <b>Claim</b></a></li>
                                                  <li><a href="#"><i class="ri-direction-line"></i> <b>Find Us</b></a></li>
                                                <!--<li><a href="#" title="Wishlist"><i class="ri-heart-line"></i></a></li>-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!--static 29-7-23-->



                    <!-- About The Business -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details">
                                <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('About the Business'); ?></h5>

                                <div class="d-block mt-3">
                                    <p>
                                        <?php
                                            echo $data->description;
                                        ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                    
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">

                    <?php if($data->type == 'restaurant'): ?>
                        <!-- Business Menu -->
                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-4 py-4">
                                <div class="jbd-details mb-2">
                                    <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('Food Menus'); ?></h5>

                                    <div class="d-block mt-3">
                                        <div class="row g-3">
                                            <!-- Single Menu -->
                                            <?php if(count($data->menus)>0): ?>
                                                <?php $__currentLoopData = $data->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <div class="Rego-sng-menu">
                                                            <div class="Rego-sng-menu-thumb">
                                                                <img src="<?php echo e(asset('assets/images/'.$menu->menu_photo)); ?>" class="img-fluid" alt="" />
                                                            </div>
                                                            <div class="Rego-sng-menu-caption">
                                                                <h4 class="ft-medium fs-md"><?php echo e($menu->menu_title); ?></h4>
                                                                <div class="lkji-oiyt"><span><?php echo app('translator')->get('Start From'); ?></span> <h5 class="theme-cl ft-bold"><?php echo e(showSignAmount($menu->menu_price)); ?></h5></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($data->type == 'hotel'): ?>
                        <!-- Business Menu -->
                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-4 py-4">
                                <div class="jbd-details mb-2">
                                    <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('Hotel room'); ?></h5>

                                    <div class="d-block mt-3">
                                        <div class="row g-3">
                                            <!-- Single Menu -->
                                            <?php if(count($data->rooms)>0): ?>
                                                <?php $__currentLoopData = $data->rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <div class="Rego-sng-menu">
                                                            <div class="Rego-sng-menu-thumb">
                                                                <img src="<?php echo e(asset('assets/images/'.$room->room_photo)); ?>" class="img-fluid" alt="" />
                                                            </div>
                                                            <div class="Rego-sng-menu-caption">
                                                                <h4 class="ft-medium fs-md"><?php echo e($room->room_name); ?></h4>
                                                                <p><?php echo e($room->room_description); ?></p>
                                                                <div class="row">

                                                                    <?php $__currentLoopData = explode(",",$room->room_amenities); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="col-lg-4 col-md-4 col-xl-4">
                                                                            <?php echo e($amenity); ?>

                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                                <div class="lkji-oiyt mt-3"><span><?php echo app('translator')->get('Start From'); ?></span> <h5 class="theme-cl ft-bold"><?php echo e(showSignAmount($room->room_price)); ?></h5></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($data->type == 'beauty'): ?>
                        <!-- Business Menu -->
                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-4 py-4">
                                <div class="jbd-details mb-2">
                                    <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('Beauty Service'); ?></h5>

                                    <div class="d-block mt-3">
                                        <div class="row g-3">
                                            <!-- Single Menu -->
                                            <?php if(count($data->services)>0): ?>
                                                <?php $__currentLoopData = $data->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <div class="Rego-sng-menu">
                                                            <div class="Rego-sng-menu-thumb">
                                                                <img src="<?php echo e(asset('assets/images/'.$service->service_photo)); ?>" class="img-fluid" alt="" />
                                                            </div>
                                                            <div class="Rego-sng-menu-caption">
                                                                <h4 class="ft-medium fs-md"><?php echo e($service->service_name); ?></h4>
                                                                <p><?php echo app('translator')->get('Availability '); ?>: <?php echo e($service->service_from); ?> - <?php echo e($service->service_to); ?></p>
                                                                <p><?php echo app('translator')->get('Duration '); ?>: <?php echo e($service->service_duration); ?> <?php echo app('translator')->get('Minute'); ?></p>
                                                                <div class="lkji-oiyt"><span><?php echo app('translator')->get('Start From'); ?></span> <h5 class="theme-cl ft-bold"><?php echo e(showSignAmount($service->service_price)); ?></h5></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Amenities and More -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details">
                                <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('Amenities and More'); ?></h5>

                                <div class="Rego-all-features-list mt-3">
                                    <ul>
                                        <?php $__currentLoopData = $amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $amenity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <div class="Rego-afl-pace">
                                                    <img src="<?php echo e(asset('assets/front/img/verify.svg')); ?>" class="" alt="" />
                                                    <span><?php echo e($amenity); ?></span>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Frequently Asked Questions -->
                    <?php if(count($data->faqs)>0): ?>
                        <div class="d-block mb-2">
                            <div class="jbd-01 py-2">
                                <div class="jbd-details">
                                    <h5 class="ft-bold fs-lg" style="padding: 0 0 0 18px"><?php echo app('translator')->get('Frequently Asked Questions'); ?></h5>

                                    <div class="d-block mt-3">
                                        <div id="accordion2" class="accordion">
                                            <?php $__currentLoopData = $data->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="card">
                                                    <div class="card-header" id="h<?php echo e($key); ?>">
                                                        <h5 class="mb-0">
                                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#ord<?php echo e($key); ?>" aria-expanded="true" aria-controls="ord<?php echo e($key); ?>">
                                                            <?php echo e($faq->faq_name); ?>

                                                        </button>
                                                        </h5>
                                                    </div>

                                                    <div id="ord<?php echo e($key); ?>" class="collapse <?php echo e($key == 0 ? 'show' :''); ?>" aria-labelledby="h<?php echo e($key); ?>" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            <?php echo e($faq->faq_details); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

<?php
//die($reviews);
?>
                    <!-- Recommended Reviews -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('Recommended Reviews'); ?></h5>
                                <div class="reviews-comments-wrap">
                                    <?php if(count($reviews) == 0): ?>
                                        <div class="col-12 text-center">
                                            <p class="m-0"><?php echo e(__('No Review Found')); ?></p>
                                        </div>
                                    <?php else: ?>
                                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <!-- reviews-comments-item -->
                                            <div class="reviews-comments-item" style="padding: 0 0 25px 0px;">
                                                <div class="review-comments-avatar">
                                                    <img src="<?php echo e(asset('assets/images/'.$review->user->photo)); ?>" class="img-fluid" alt="">
                                                </div>
                                                <div class="reviews-comments-item-text" >
                                                    <h4>
                                                        <a href="#"><?php echo e($review->name); ?></a>
                                                        <span class="reviews-comments-item-date">
                                                            <i class="ti-calendar theme-cl me-1"></i>
                                                            <?php echo e($review->created_at->format('d M Y')); ?>

                                                        </span>
                                                    </h4>
                                                    <span class="agd-location">
                                                        <i class="lni lni-map-marker me-1"></i>
                                                        <?php echo e($review->user->address); ?>

                                                    </span>

                                                    <div class="listing-rating high">
                                                        <?php for($i=1; $i<=$review->rate; $i++): ?>
                                                            <i class="fas fa-star active"></i>
                                                        <?php endfor; ?>

                                                        <?php for($i=1; $i<=(5-$review->rate); $i++): ?>
                                                            <i class="fas fa-star"></i>
                                                        <?php endfor; ?>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p>
                                                        <?php echo e($review->message); ?>

                                                    </p>

                                                </div>
                                            </div>
                                            <!--reviews-comments-item end-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                    <ul class="pagination">
                                        <?php if($reviews->hasPages()): ?>
                                            <?php echo e($reviews->links()); ?>

                                        <?php endif; ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location & Hours -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('Location & Hours'); ?></h5>
                                <div class="Rego-lot-wrap d-block">
                                    <div class="row g-4">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="list-map-lot">
                                                <iframe src="https://maps.google.com/maps?q=<?php echo e($data->latitude); ?>,<?php echo e($data->longitude); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php echo app('translator')->get('Mon'); ?></th>
                                                        <?php if($schedules['mon_open'] != 'closed' && $schedules['mon_close']): ?>
                                                            <td><?php echo e($schedules['mon_open']); ?> - <?php echo e($schedules['mon_close']); ?></td>
                                                        <?php else: ?>
                                                            <td><?php echo app('translator')->get('closed'); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo app('translator')->get('Tue'); ?></td>
                                                        <?php if($schedules['tue_open'] != 'closed' && $schedules['tue_close']): ?>
                                                            <td><?php echo e($schedules['tue_open']); ?> - <?php echo e($schedules['tue_close']); ?></td>
                                                        <?php else: ?>
                                                            <td><?php echo app('translator')->get('closed'); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo app('translator')->get('Wed'); ?></td>
                                                        <?php if($schedules['wed_open'] != 'closed' && $schedules['wed_close']): ?>
                                                            <td><?php echo e($schedules['wed_open']); ?> - <?php echo e($schedules['wed_close']); ?></td>
                                                        <?php else: ?>
                                                            <td><?php echo app('translator')->get('closed'); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo app('translator')->get('Thu'); ?></td>
                                                        <?php if($schedules['thu_open'] != 'closed' && $schedules['thu_close']): ?>
                                                            <td><?php echo e($schedules['thu_open']); ?> - <?php echo e($schedules['thu_close']); ?></td>
                                                        <?php else: ?>
                                                            <td><?php echo app('translator')->get('closed'); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo app('translator')->get('Fri'); ?></td>
                                                        <?php if($schedules['fri_open'] != 'closed' && $schedules['fri_close']): ?>
                                                            <td><?php echo e($schedules['fri_open']); ?> - <?php echo e($schedules['fri_close']); ?></td>
                                                        <?php else: ?>
                                                            <td><?php echo app('translator')->get('closed'); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo app('translator')->get('Sat'); ?></td>
                                                        <?php if($schedules['sat_open'] != 'closed' && $schedules['sat_close']): ?>
                                                            <td><?php echo e($schedules['sat_open']); ?> - <?php echo e($schedules['sat_close']); ?></td>
                                                        <?php else: ?>
                                                            <td><?php echo app('translator')->get('closed'); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo app('translator')->get('Sun'); ?></td>
                                                        <?php if($schedules['sun_open'] != 'closed' && $schedules['sun_close']): ?>
                                                            <td><?php echo e($schedules['sun_open']); ?> - <?php echo e($schedules['sun_close']); ?></td>
                                                        <?php else: ?>
                                                            <td><?php echo app('translator')->get('closed'); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Drop Your Review -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg"><?php echo app('translator')->get('Drop Your Review'); ?></h5>
                                <div class="review-form-box form-submit mt-3">
                                    <form action="<?php echo e(route('front.listing.review')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <input type="hidden" name="listing_id" value="<?php echo e($data->id); ?>">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1"><?php echo app('translator')->get('Choose Rate'); ?></label>
                                                    <select name="rate" class="form-control rounded">
                                                        <option><?php echo app('translator')->get('Choose Rating'); ?></option>
                                                        <option value="1"><?php echo app('translator')->get('1 Star'); ?></option>
                                                        <option value="2"><?php echo app('translator')->get('2 Star'); ?></option>
                                                        <option value="3"><?php echo app('translator')->get('3 Star'); ?></option>
                                                        <option value="4"><?php echo app('translator')->get('4 Star'); ?></option>
                                                        <option value="5"><?php echo app('translator')->get('5 Star'); ?></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1"><?php echo app('translator')->get('Name'); ?></label>
                                                    <input class="form-control rounded" type="text" name="name" placeholder="<?php echo app('translator')->get('Your Name'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1"><?php echo app('translator')->get('Email'); ?></label>
                                                    <input class="form-control rounded" type="email" name="email" placeholder="<?php echo app('translator')->get('Your Email'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1"><?php echo app('translator')->get('Review'); ?></label>
                                                    <textarea class="form-control rounded ht-140" name="message" placeholder="<?php echo app('translator')->get('Review'); ?>"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn theme-bg text-light rounded">Submit Review</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    
                     <div class="jb-apply-form bg-white rounded py-4 px-4 mb-4">
                        <div class="uli-list-info">
                            <ul>

                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-globe"></i></div>
                                        <div class="list-uiyt-capt"><h5><?php echo app('translator')->get('Live Site'); ?></h5><p><?php echo e($data->website); ?></p></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-envelope"></i></div>
                                        <div class="list-uiyt-capt"><h5><?php echo app('translator')->get('Drop a Mail'); ?></h5><p><?php echo e($data->email); ?></p></div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-phone"></i></div>
                                        <div class="list-uiyt-capt"><h5><?php echo app('translator')->get('Call Us'); ?></h5><p><?php echo e($data->phone_number); ?></p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="list-uiyt-capt"><h5><?php echo app('translator')->get('Get Directions'); ?></h5><p><?php echo e($data->real_address); ?></p></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    
                    
                    <!--static section-->
                    <div class="jb-apply-form bg-white rounded py-4 px-4 mb-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="side-list">
                                    <h3>Address</h3>
                                    <p><?php
                                        echo $ps->street;
                                    ?></p>
                                    <a href="#"><i class="ri-corner-up-right-line"></i> Get Direction</a>
                                    <ul class="ps-0 mt-3">
                                        <!--<li><i class="ri-refund-2-line"></i> GSTIN : 09AAOFD5745M1ZQ</li>-->
                                        <li><i class="ri-mail-line"></i> Send Enquiry on Email</li>
                                        <li><i class="ri-chat-1-line"></i> Get Info via SMS/Email</li>
                                        <li><i class="ri-share-forward-line"></i> Share this</li>
                                        <li><i class="ri-star-line"></i> Tap to rate</li>
                                        <li><i class="ri-pages-line"></i> Visit our Website</li>
                                        <li><i class="ri-facebook-fill"></i> Facebook</li>
                                        <li><i class="ri-instagram-line"></i> Instagram</li>
                                        <li><i class="ri-pencil-fill"></i> Edit this</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--static section-->





                    <!-- Author Box -->
                    <!--<div class="jb-apply-form bg-white rounded py-4 px-4 mb-4">-->
                    <!--    <?php if($data->user_id != NULL): ?>-->
                    <!--        <div class="Rego-agent-blocks">-->
                    <!--            <div class="Rego-agent-thumb"><img src="<?php echo e(asset('assets/images/'.$data->user->photo)); ?>" width="90" class="img-fluid circle" alt=""></div>-->
                    <!--            <div class="Rego-agent-caption">-->
                    <!--                <h4 class="ft-medium mb-0"><?php echo e($data->user->name); ?></h4>-->
                    <!--                <span class="agd-location"><i class="lni lni-map-marker me-1"></i><?php echo e($data->user->address); ?></span>-->
                    <!--            </div>-->
                    <!--            <div class="clearfix"></div>-->
                    <!--        </div>-->

                    <!--        <div class="Rego-iuky">-->
                    <!--            <ul>-->
                    <!--                <li><?php echo e(DB::table('recent_views_listings')->where('listing_owner_id',$data->user->id)->count()); ?><span><?php echo app('translator')->get('Views'); ?></span></li>-->
                    <!--                <li><?php echo e(count($data->user->listings)); ?><span><?php echo app('translator')->get('Listings'); ?></span></li>-->
                    <!--                <li><?php echo e(DB::table('followers')->where('user_id',$data->user->id)->count()); ?><span><?php echo app('translator')->get('Followers'); ?></span></li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--    <?php else: ?>-->
                    <!--        <div class="Rego-agent-blocks">-->
                    <!--            <div class="Rego-agent-thumb"><img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" width="90" class="img-fluid circle" alt=""></div>-->
                    <!--            <div class="Rego-agent-caption">-->
                    <!--                <h4 class="ft-medium mb-0"><?php echo e(getAdmin()->name); ?></h4>-->
                    <!--                <span class="agd-location"><i class="lni lni-map-marker me-1"></i>San Francisco</span>-->
                    <!--            </div>-->
                    <!--            <div class="clearfix"></div>-->
                    <!--        </div>-->

                    <!--        <div class="Rego-iuky">-->
                    <!--            <ul>-->
                    <!--                <li><?php echo e(DB::table('recent_views_listings')->where('listing_owner_id','NULL')->count()); ?><span><?php echo app('translator')->get('Views'); ?></span></li>-->
                    <!--                <li><?php echo e(DB::table('listings')->where('admin_id','NULL')->count()); ?><span><?php echo app('translator')->get('Listings'); ?></span></li>-->
                    <!--                <li><?php echo e(DB::table('followers')->where('user_id','NULL')->count()); ?><span><?php echo app('translator')->get('Followers'); ?></span></li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--    <?php endif; ?>-->

                    <!--    <div class="agent-cnt-info">-->
                    <!--        <div class="row g-4">-->
                    <!--            <div class="col-12">-->
                    <!--                <a href="javascript:void(0);" class="adv-btn full-width add-follow" data-user="<?php echo e(auth()->id()); ?>" data-owner="<?php echo e($data->user_id); ?>" data-listing="<?php echo e($data->id); ?>"><?php echo app('translator')->get('Follow Now'); ?></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="row mt-3">-->
                    <!--            <div class="col-12">-->
                    <!--                <?php if($data->user_id != NULL): ?>-->
                    <!--                    <a href="<?php echo e(route('front.author.details',$data->user->username)); ?>" class="adv-btn full-width theme-bg text-light"><?php echo app('translator')->get('View Profile'); ?></a>-->
                    <!--                <?php else: ?>-->
                    <!--                    <a href="<?php echo e(route('front.author.details','admin')); ?>" class="adv-btn full-width theme-bg text-light"><?php echo app('translator')->get('View Profile'); ?></a>-->
                    <!--                <?php endif; ?>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--</div>-->

                    <!-- Business Info -->
                   

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Listing Details End ================================== -->
    
    <section>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="p-category">
                    <h4 class="widget_title">Popular Categories</h4>
                    <ul class="ps-0">
                        <li><a href="#">Body Massage Centres</a></li><span class="pipe">|</span>
                        <li><a href="#">Cinema Halls</a></li><span class="pipe">|</span>
                        <li><a href="#">Schools</a></li><span class="pipe">|</span>
                        <li><a href="#">Beauty Spas</a></li><span class="pipe">|</span>
                        <li><a href="#">Dermatologists</a></li><span class="pipe">|</span>
                        <li><a href="#">Hospitals</a></li><span class="pipe">|</span>
                        <li><a href="#">Malls</a></li><span class="pipe">|</span>
                        <li><a href="#">Gyms</a></li><span class="pipe">|</span>
                        <li><a href="#">Beauty Parlours</a></li><span class="pipe">|</span>
                        <li><a href="#">Estate Agents</a></li><span class="pipe">|</span>
                        <li><a href="#">Banquet Halls</a></li><span class="pipe">|</span>
                        <li><a href="#">ENT Doctors</a></li><span class="pipe">|</span>
                        <li><a href="#">Book Shops</a></li><span class="pipe">|</span>
                        <li><a href="#">Bike On Rent</a></li><span class="pipe">|</span>
                        <li><a href="#">Sexologist Doctors</a></li><span class="pipe">|</span>
                        <li><a href="#">Neurologists</a></li><span class="pipe">|</span>
                        <li><a href="#">Gynaecologist & Obstetrician Doctors</a></li><span class="pipe">|</span>
                        <li><a href="#">Tiffin Services</a></li><span class="pipe">|</span>
                        <li><a href="#">Travel Agents</a></li><span class="pipe">|</span>
                        <li><a href="#">Paying Guest Accommodations</a></li><span class="pipe">|</span>
                        <li><a href="#">General Physician Doctors</a></li><span class="pipe">|</span>
                        <li><a href="#">Dentists</a></li><span class="pipe">|</span>
                        <li><a href="#">Orthopaedic Doctors</a></li><span class="pipe">|</span>
                        <li><a href="#">Chemists</a></li><span class="pipe">|</span>
                        <li><a href="#">Motor Training Schools</a></li><span class="pipe">|</span>
                        <li><a href="#">Gastroenterologists</a></li><span class="pipe">|</span>
                        <li><a href="#">Car Rental</a></li><span class="pipe">|</span>
                        <li><a href="#">Salons</a></li><span class="pipe">|</span>
                        <li><a href="#">Courier Services</a></li><span class="pipe">|</span>
                        <li><a href="#">Dance Classes</a></li><span class="pipe">|</span>
                        <li><a href="#">Taxi Services</a></li><span class="pipe">|</span>
                        <li><a href="#">Cake Shops</a></li><span class="pipe">|</span>
                        <li><a href="#">AC Repair & Services</a></li><span class="pipe">|</span>
                        <li><a href="#">Mobile Phone Dealers</a></li><span class="pipe">|</span>
                        <li><a href="#">Pet Shops</a></li><span class="pipe">|</span>
                        <li><a href="#">Dmart</a></li><span class="pipe">|</span>
                        <li><a href="#">Packers And Movers</a></li><span class="pipe">|</span>
                        <li><a href="#">Psychiatrists</a></li><span class="pipe">|</span>
                        <li><a href="#">Dharamshalas</a></li><span class="pipe">|</span>
                        <li><a href="#">Urologist Doctors</a></li><span class="pipe">|</span>
                        <li><a href="#">Bakeries</a></li><span class="pipe">|</span>
                        <li><a href="#">Bicycle Dealers</a></li><span class="pipe">|</span>
                        <li><a href="#">Coffee Shops</a></li><span class="pipe">|</span>
                        <li><a href="#">Paediatricians</a></li><span class="pipe">|</span>
                        <li><a href="#">Sonography Centres</a></li><span class="pipe">|</span>
                        <li><a href="#">Yoga Classes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    
    
    
    
    

    <!-- ======================= Related Listings ======================== -->
    <?php if(isset($$recentViews) && count($recentViews)>0): ?>
        <section class="space min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="theme-cl mb-0"><?php echo app('translator')->get('Related Listing'); ?></h6>
                            <h2 class="ft-bold"><?php echo app('translator')->get('Recently Viewed Listing'); ?></h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $recentViews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$recentview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $data = $recentview->listing;
                        ?>
                        <!-- Single -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="Rego-grid-wrap">
                                <div class="Rego-grid-upper">
                                    <div class="Rego-pos ab-left">
                                        <div class="Rego-status close me-2"><?php echo e($data->openClose($data->id)); ?></div>
                                    </div>
                                    <div class="Rego-grid-thumb">
                                        <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="d-block text-center m-auto">
                                            <img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <?php if(count($data->reviews)): ?>
                                        <div class="Rego-rating overlay">
                                            <div class="Rego-pr-average high"><?php echo e($data->directoryRatting($data->id)); ?></div>
                                            <div class="Rego-aldeio">
                                                <div class="Rego-rates">
                                                    <?php
                                                        $rate = ceil($data->directoryRatting($data->id));
                                                    ?>

                                                    <?php for($i=1; $i<=$rate; $i++): ?>
                                                        <i class="fas fa-star active"></i>
                                                    <?php endfor; ?>

                                                    <?php for($i=1; $i<=(5-$rate); $i++): ?>
                                                        <i class="fas fa-star"></i>
                                                    <?php endfor; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="Rego-grid-fl-wrap">
                                    <div class="Rego-caption px-3 py-2">
                                        <div class="Rego-author">
                                            <?php if($data->user_id == NULL && $data->admin_id == NULL): ?>
                                                <a href="<?php echo e(route('front.author.details','admin')); ?>">
                                                    <img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" class="img-fluid circle" alt="">
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('front.author.details',$data->user->name)); ?>">
                                                    <img src="<?php echo e(asset('assets/images/'.$data->user->photo)); ?>" class="img-fluid circle" alt="">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <h4 class="mb-0 ft-medium medium">
                                            <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="text-dark fs-md"><?php echo e($data->category->title); ?></a>
                                        </h4>
                                        <div class="Rego-location">
                                            <i class="fas fa-map-marker-alt me-1 theme-cl"></i>
                                            <?php echo e($data->real_address); ?>

                                        </div>
                                        <div class="Rego-middle-caption mt-3">
                                            <p>
                                                <?php echo e(strlen($data->description)>60 ? substr($data->description,0,60) :  $data->description); ?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="Rego-grid-footer py-2 px-3">
                                        <div class="Rego-ft-first">
                                            <a href="<?php echo e(route('front.listing',['category' => $data->category->slug])); ?>" class="Rego-cats-wrap"><span class="cats-title"><?php echo e($data->category->title); ?></span></a>
                                        </div>
                                        <div class="Rego-ft-last">
                                            <div class="Rego-inline">
                                                <div class="Rego-bookmark-btn"><button type="button"><i class="lni lni-envelope position-absolute"></i></button></div>
                                                <div class="Rego-bookmark-btn">
                                                    <button type="button" class="wishList" data-listing="<?php echo e($data->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                                                        <i class="lni lni-heart<?php echo e($data->userFavourite(auth()->id(),$data->id) ? '-filled' : ''); ?> position-absolute"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- row -->

            </div>
        </section>
    <?php endif; ?>
    <!-- ======================= Related Listings ======================== -->

    <!-- ============================ Call To Action ================================== -->
    <?php if ($__env->exists('partials.front.cta')) echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Call To Action End ================================== -->
    
    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        'use strict';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click','.wishList',function(){
            let $this = $(this);
            let listingId = $(this).data('listing');
            let userId = $(this).data('user');
            if(userId == ''){
                window.location.href = mainurl+'/user/login'
            }

            $.ajax({
                method:"POST",
                url: mainurl+'/listing/wishlist',
                data: {
                    listing_id : listingId,
                    user_id : userId
                },
                success:function(data)
                {
                    if(data.success){
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart-filled  position-absolute');
                        toastr.success(data.success);
                    }else{
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart  position-absolute');
                        toastr.error(data.error);
                    }
                }

            });

        })

        $(document).on('click','.add-follow',function(){
            let $this = $(this);
            let listingId = $(this).data('listing');
            let ownerId = $(this).data('owner');
            let userId = $(this).data('user');
            if(userId == ''){
                window.location.href = mainurl+'/user/login'
            }

            $.ajax({
                method:"POST",
                url: mainurl+'/follow',
                data: {
                    listing_id : listingId,
                    owner_id : ownerId,
                    user_id : userId,
                },
                success:function(data)
                {
                    if(data.success) toastr.success(data.success);
                    else toastr.error(data.error);
                }

            });
        })

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/frontend/details.blade.php ENDPATH**/ ?>