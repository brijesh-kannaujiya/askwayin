<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
 

   <style>
	.flex-xy
	{
		display: flex;
		background: #f1f1f1;
	    padding: 10px;
	    border-radius: 5px;
	    margin-bottom: 20px;
	}

	.flex-xy p
	{
		font-size: 17px;
		color: #000;
	}

	.flex-left
	{
		display: flex;flex-wrap: wrap;
			margin-bottom: 60px;
	}

	.flex-left div
	{
		/*background: #f1f1f1;*/
		/*border-radius: 50px;*/
		/*padding: 10px 20px;*/
		margin-bottom: 5px;
		margin-right: 10px;
	}

	.flex-left div:hover
	{
		color: #029d9f;
		/*transition: 0.5s ease-in-out;*/
	}

	.flex-left div:hover a
	{
		color: #029d9f;
	}
</style>
<?php
$slug = request('slug');
$banner= DB::select("SELECT * FROM categories where slug='$slug'");
//dd($banner);
?>
<?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bannerss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="bread">
				<img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($bannerss->photo_banner); ?>" class="img-fluid" style="width: 100%;">
			</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="container">
	
	<div class="row">
	    <div class="col-md-12">
	        
	        <?php echo $__env->make('frontend.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	    </div>
	</div>
	
	
	<div class="row">
		<div class="col-md-4">
			
				<div class="input-group my-4">
				  <span class="input-group-text"><i class="ri-search-line"></i></span>
				  <input type="text" class="form-control" placeholder="Search Category" aria-label="Username" id="myInput"  aria-describedby="basic-addon1">
				</div>
			
		</div>
	</div>
	<div class="row" style="margin-bottom: 60px" id="myDIV">
        

	    <?php if($categoriesub): ?>
                    <?php $__currentLoopData = $categoriesub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $categorysub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4">
		    <a href="<?php echo e(route('front.listing',['category'=>[$categorysub->slug]])); ?>">
			<div class="flex-xy">
				<div>
					<img src="<?php echo e(asset('assets/images')); ?>/<?php echo e($categorysub->photo); ?>" class="img-fluid me-3" style="width: 30px;">
				</div>
				<div>
					<p class="mb-0"><?php echo app('translator')->get($categorysub->title); ?></p>
				</div>
			</div>
			</a>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    		<?php endif; ?>
	 
		
	</div>

	<div class="">
		<div class="row">
			<div class="col-md-12">
				<h3><?php echo app('translator')->get('Explore more A to Z'); ?></h3>
				<div class="flex-left">
                <?php
                $popularcat= DB::select('SELECT * FROM categories where pop_cat=0');
                ?>
				    <?php if($popularcat): ?>
                       <?php $__currentLoopData = $popularcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $popularcat_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div>
						<a href="<?php echo e(route('front.listing',['category'=>[$popularcat_data->slug]])); ?>" class="bg-round"><?php echo app('translator')->get($popularcat_data->title); ?> |</a>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    		<?php endif; ?>
					 
				</div>
			</div>
		</div>
	</div>
	
	
		<div class="">
		<div class="row">
			<div class="col-md-12">
				<h3><?php echo app('translator')->get('Popular Category'); ?></h3>
				<div class="flex-left">
                <?php
                $popularcat1= DB::select('SELECT * FROM categories where pop_cat=1');
                ?>
				    <?php if($popularcat1): ?>
                       <?php $__currentLoopData = $popularcat1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $popularcat_data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div>
						<a href="<?php echo e(route('front.listing',['category' => [$popularcat_data1->slug]])); ?>" class="bg-round"><?php echo app('translator')->get($popularcat_data1->title); ?> |</a>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    		<?php endif; ?>
					 
				</div>
			</div>
		</div>
	</div>
	
	
		<div class="">
		<div class="row">
			<div class="col-md-12">
				<h3><?php echo app('translator')->get('Popular Cities'); ?></h3>
				<div class="flex-left">
                      <?php
                      $locations= DB::select('SELECT * FROM locations where status=1');
                      ?>
                       <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div>
						<a href="<?php echo e(route('front.listing',['location' => [$location->slug]])); ?>" class="bg-round"><?php echo app('translator')->get($location->name); ?> |</a>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    		
				</div>
			</div>
		</div>
	</div>
	
	 
	
	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <!-- ======================= Newsletter Start ============================ -->
        <?php echo $__env->make('partials.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <?php echo $__env->make('partials.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================ Footer End ================================== -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/frontend/subcat.blade.php ENDPATH**/ ?>