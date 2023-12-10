<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Add New Appadds')); ?> <a class="btn btn-primary btn-rounded btn-sm" href="<?php echo e(route('admin.appadds.index')); ?>"><i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a></h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Homepage setting')); ?></a></li>>
    </ol>
  </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Add New Appadds Form')); ?></h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="<?php echo e(route('admin.appadds.store')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


                <div class="form-group d-none">
                <label for="title"><?php echo e(__('Brand Name')); ?></label>
                <input type="text" class="form-control" id="name" name="name" value=""  placeholder="<?php echo e(__('Brand Name')); ?>">
            </div>
            
            <div class="form-group">
                <label for="title"><?php echo e(__('category')); ?></label>
            <select name="category_id" class="input-field">
            <?php
            $categoriesubID = DB::table('categories')->where('parent_id', NULL)->get();
            ?>
            <?php $__currentLoopData = $categoriesubID; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            </div>
           
            
            
             <div class="form-group">
                <label for="title"><?php echo e(__('Adds Url')); ?></label>
                <input type="text" class="form-control" id="appadds_url" name="appadds_url" value=""  placeholder="<?php echo e(__('Adds Url')); ?>" required>
            </div>
            
            
            <div class="form-group">
                <label><?php echo e(__('Adds App Icon')); ?> </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url(<?php echo e(asset('assets/images/placeholder.jpg')); ?>);"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload1"> <i class="fas fa-camera"></i> <?php echo e(__('Adds App Icon')); ?> </label>
                            <input id="img-upload1" type="file" class="image-upload" name="appadds_img" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label><?php echo e(__('Set Picture')); ?> </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url(<?php echo e(asset('assets/images/placeholder.jpg')); ?>);"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload2"> <i class="fas fa-camera"></i> <?php echo e(__('Upload Picture')); ?> </label>
                            <input id="img-upload2" type="file" class="image-upload" name="photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>


          <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/admin/appadds/create.blade.php ENDPATH**/ ?>