
        <form method="POST" class="flex-filter">
            <div class="cat d-none">
                <select name="category">
                    <option selected="" disabled="">Category</option>
                    <?php
                    $allcategories = DB::table('categories')->where('parent_id',NULL)->get();
                    foreach($allcategories as $allcategories_data){
                    ?>
                    <option value="<?php echo e($allcategories_data->id); ?>"><?php echo e($allcategories_data->title); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="cat">
                <select name="sort_by">
                    <option selected="" disabled="">Sort by</option>
                    <option value="Relevance">Relevance</option>
                    <option value="Rating">Rating</option>
                    <option value="Popular">Popular</option>
                    <option value="Distance">Distance</option>
                </select>
            </div>
            <!--<div class="cat action">-->
            <!--   <label>-->
            <!--      <input type="checkbox" value="1"><span>Book a Table</span>-->
            <!--   </label>-->
            <!--</div>-->
            <div class="cat action">
               <label>
                  <input type="checkbox" value="1"><span>Online Ordering</span>
               </label>
            </div>
            <div class="cat action">
               <label>
                  <input type="checkbox" value="1"><span>Open Now</span>
               </label>
            </div>
            <div class="cat action">
               <label>
                  <input  type="checkbox" class="highlight_type" value="Tranding"><span>Trending</span>
               </label>
            </div>
            <div class="cat action">
               <label>
                  <input type="checkbox" class="highlight_type" value="Top Rated"><span>Top Rated</span>
               </label>
            </div>
             
            <div class="cat action">
               <label>
                  <input  type="checkbox" class="is_verify" value="1"><span>Verified</span>
               </label>
            </div>
            <div class="cat action">
               <label>
                  <input type="checkbox" class="is_verify" value="1"><span>Deals</span>
               </label>
            </div>
        </form>
    



<?php if(count($listings)>0): ?>
    <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3">
            <div class="Rego-grid-wrap">
                <div class="Rego-grid-upper">
                    <div class="Rego-bookmark-btn">
                        <button type="button" class="wishList" data-listing="<?php echo e($data->id); ?>" data-user=<?php echo e(auth()->id()); ?>>
                            <i class="lni lni-heart<?php echo e($data->userFavourite(auth()->id(),$data->id) ? '-filled' : ''); ?> position-absolute"></i>
                        </button>
                    </div>
                    <div class="Rego-pos ab-left">
                        <div class="Rego-status open me-2"><?php echo e($data->openClose($data->id)); ?></div>
                        <?php if($data->is_feature): ?>
                            <div class="Rego-featured-tag"><?php echo app('translator')->get('Featured'); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="Rego-grid-thumb">
                        <a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="d-block text-center m-auto">
                            <img src="<?php echo e(asset('assets/images/'.$data->photo)); ?>" class="img-fluid" alt="" />
                            </a>
                    </div>
                </div>
                <div class="Rego-grid-fl-wrap">
                    <div class="Rego-caption px-3 py-2">
                        <!--<div class="Rego-author">-->
                        <!--    <?php if($data->user_id == NULL && $data->admin_id == NULL): ?>-->
                        <!--        <a href="<?php echo e(route('front.author.details','admin')); ?>">-->
                        <!--            <img src="<?php echo e(asset('assets/images/'.getAdmin()->photo)); ?>" class="img-fluid circle" alt="">-->
                        <!--        </a>-->
                        <!--    <?php else: ?>-->
                        <!--        <a href="<?php echo e(route('front.author.details',$data->user->username)); ?>">-->
                        <!--            <img src="<?php echo e(asset('assets/images/'.$data->user->photo)); ?>" class="img-fluid circle" alt="">-->
                        <!--        </a>-->
                        <!--    <?php endif; ?>-->
                        <!--</div>-->
                        <div class="Rego-cates"><a href="<?php echo e(route('front.listing',['category' => $data->category->slug])); ?>"><?php echo app('translator')->get($data->category->title); ?></a></div>
                        <h4 class="mb-0 ft-medium medium"><a href="<?php echo e(route('front.listing.details',$data->slug)); ?>" class="text-dark fs-md"><?php echo app('translator')->get($data->name); ?>
                        <!--<span class="verified-badge"><i class="fas fa-check-circle"></i></span>-->
                        </a></h4>
                        <div class="Rego-middle-caption mt-3">
                            <div class="Rego-location"><i class="fas fa-map-marker-alt"></i><?php echo app('translator')->get($data->real_address); ?></div>
                            <div class="Rego-call"><i class="fas fa-phone-alt"></i><?php echo app('translator')->get($data->phone_number); ?></div>
                        </div>
                    </div>
                    <div class="Rego-grid-footer py-3 px-3">
                        <div class="Rego-ft-first">
                            <?php if(count($data->reviews)>0): ?>
                                <div class="Rego-rating">
                                    <div class="Rego-pr-average high"><?php echo e(ceil($data->directoryRatting($data->id))); ?></div>
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
                            <?php endif; ?>
                        </div>
                       
                        <div class="Rego-ft-last">
                            <span class="small"><?php echo e(count($data->reviews)); ?> <?php echo app('translator')->get('Reviews'); ?></span>
                        </div>
                         
                    </div>
                    <div class="Rego-ft-last">
                        <span class="small"><?php echo e($data->created_at->diffForHumans()); ?></span>
                        </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <div class="col-lg-12 col-md-12">
        <h5 class="text-center">
            <?php echo app('translator')->get('No Directory Found!'); ?>
        </h5>
    </div>
<?php endif; ?>
<?php
///dd($listings);
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <?php if($listings->hasPages()): ?>
            <?php echo e($listings->links()); ?>

        <?php endif; ?>
    </div>
</div>

    <form id="search_item" class="d-none" action="<?php echo e(route('front.filter')); ?>" method="get">
    <input type="text" name="is_verify" id="is_verify" value="">
    <input type="text" name="highlight_type" id="highlight_type" value="">
    <button type="submit" id="search_btn_submit" class="d-none"></button>
    </form>

<?php $__env->startPush('js'); ?>
<script>
    'use strict';

    $(document).on('click','.is_verify',function(){
       let is_verify = [];
       $.each($('.is_verify'), function( index, value ) {
            if($(this).is(':checked')){
                is_verify.push($(this).val());
            }
		});

        $('#search_item #is_verify').val(is_verify);
        $('#search_btn_submit').click();
	})

    $(document).on('click','.highlight_type',function(){
        let highlight_type = [];
        $.each($('.highlight_type'), function( index, value ) {
            if($(this).is(':checked')){
                console.log($(this).val());
                highlight_type.push($(this).val());
            }
		});
        $('#search_item #highlight_type').val(highlight_type);
        $('#search_btn_submit').click();
    })
    </script>
    <?php $__env->stopPush(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/partials/front/listing.blade.php ENDPATH**/ ?>