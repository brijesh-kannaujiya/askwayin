<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- ============================ Main Section Start ================================== -->

    
<section class="gray py-5">
<?php
   $type = request('category');
   
   //dd($type);
   foreach ($type as $key => $data){
   $banner= DB::select("SELECT * FROM categories where slug='$data' limit 1");
   foreach ($banner as $key => $bannerss){
       //dd($bannerss);
?>
<div class="bread pb-4">
				<img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($bannerss->photo_banner); ?>" class="img-fluid" style="width: 100%;">
			</div>
<?php } } ?>
        <div class="container">
            <div class="row">

               

                <!-- Item Wrap Start -->
                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-3">

                    <!-- row -->
                    <div class="row justify-content-center gx-3" id="show_search_items">
                        <?php if ($__env->exists('partials.front.listing')) echo $__env->make('partials.front.listing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- row -->

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Main Section End ================================== -->

    <!-- ======================= Newsletter Start ============================ -->
    <?php echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->

    <form id="search_item" class="d-none" action="<?php echo e(route('front.listing')); ?>" method="get">
        <input type="text" name="type[]" id="type" value="">
        <input type="text" name="location[]" id="location" value="">
		<input type="text" name="category[]" id="categories" value="">
        <button type="submit" id="search_btn_submit" class="d-none"></button>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
    'use strict';

    $(document).on('click','.search_cat',function(){
       let categories = [];
       $.each($('.search_cat'), function( index, value ) {
            if($(this).is(':checked')){
                categories.push($(this).val());
            }
		});

        $('#search_item #categories').val(categories);
        $('#search_btn_submit').click();
	})

    $(document).on('click','.search_loc',function(){
        let locations = [];
        $.each($('.search_loc'), function( index, value ) {
            if($(this).is(':checked')){
                console.log($(this).val());
                locations.push($(this).val());
            }
		});
        $('#search_item #location').val(locations);
        $('#search_btn_submit').click();
    })

    $(document).on('click','.search_type',function(){
        let types = [];
        $.each($('.search_type'), function( index, value ) {
            if($(this).is(':checked')){
                types.push($(this).val());
            }
		});
        $('#search_item #type').val(types);
        $('#search_btn_submit').click();
    })

    $(document).on('click','#clearAll',function(){
        let categories = [];
        let locations = [];
        let types = [];

        $.each($('.search_cat'), function( index, value ) {
            if($(this).is(':checked')){
                $(this).prop('checked',false);
            }
		});

        $.each($('.search_loc'), function( index, value ) {
            if($(this).is(':checked')){
                $(this).prop('checked',false);
            }
		});

        $.each($('.search_type'), function( index, value ) {
            if($(this).is(':checked')){
                $(this).prop('checked',false);
            }
		});

        $('#search_item #categories').val(categories);
        $('#search_item #location').val(locations);
        $('#search_item #type').val(types);
        $('#search_btn_submit').click();
    })


    function doSubmit(){
        $('#__search').submit();
    }

    $(document).on('submit','#search_item',function(e){
        e.preventDefault();
        $.ajax({
            method: 'GET',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
                $('#show_search_items').html(data);
            }
        });
	})

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


</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/frontend/list.blade.php ENDPATH**/ ?>