<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Edit Language')); ?> <a class="btn btn-primary btn-rounded btn-sm" href="<?php echo e(route('admin.lang.index')); ?>"><i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?></a></h5>
    <ol class="breadcrumb py-0 m-0">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item"><a href="javascript:;"><?php echo e(__('Language Settings')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.lang.index')); ?>"><?php echo e(__('Website Language')); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.lang.edit',$data->id)); ?>"><?php echo e(__('Edit Language')); ?></a></li>
    </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-lg-12">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Edit Language Form')); ?></h6>
      </div>

      <div class="card-body">
        
        <form class="geniusform" action="<?php echo e(route('admin.lang.update',$data->id)); ?>" method="POST" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <div class="row">
            <div class="col-lg-4">
              <div class="left-area">
                <h6 class="heading float-right"><?php echo e(__('Language')); ?> *</h6>
              </div>
            </div>
            <div class="col-lg-7">
              <input type="text" class="input-field" name="language" placeholder="<?php echo e(__('Language')); ?>" value="<?php echo e($data->language); ?>" required="">
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="left-area">
                <h6 class="heading float-right"><?php echo e(__('Language Direction')); ?> *</h6>
              </div>
            </div>
            <div class="col-lg-7">
              <select name="rtl" class="input-field" required="">
                <option value="0" <?php echo e($data->rtl == '0'  ? 'selected' : ''); ?>><?php echo e(__('Left To Right')); ?></option>
                <option value="1" <?php echo e($data->rtl == '1'  ? 'selected' : ''); ?>><?php echo e(__('Right To Left')); ?></option>
              </select>
            </div>
          </div>


        <hr>

          <h4 class="text-center"><?php echo e(__('SET LANGUAGE KEYS & VALUES')); ?></h4>

        <hr>

        <div class="row mb-3">

          <div class="col-lg-2">
            <div class="left-area">
            </div>
          </div>

            <div class="col-lg-4">
              <h5><b>Main Languages</b></h5>
            </div>

            <div class="col-lg-5">
              <h5><b>Translated Languages</b></h5>
            </div>

        </div>

        <div class="row">
          <div class="col-lg-2">
            <div class="left-area">

            </div>
          </div>
          <div class="col-lg-8">
            <div class="featured-keyword-area">

              <div class="lang-tag-top-filds" id="lang-section">


              <?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="lang-area mb-3">
                  <span class="remove lang-remove"><i class="fas fa-times"></i></span>
                  <div class="row">
                    <div class="col-lg-6">
                      <textarea name="keys[]" class="form-control" placeholder="<?php echo e(__('Enter Language Key')); ?>" readonly=""><?php echo e($key); ?></textarea>
                    </div>

                    <div class="col-lg-6">
                      <textarea  name="values[]" class="form-control" placeholder="<?php echo e(__('Enter Language Value')); ?>" required=""><?php echo e($val); ?></textarea>
                    </div>
                  </div>
                </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>

              <a href="javascript:;" id="lang-btn" class="add-fild-btn d-flex justify-content-center"><i class="icofont-plus"></i> <?php echo e(__('Add More Field')); ?></a>
            </div>
          </div>

          <div class="col-lg-2">
            <div class="left-area">

            </div>
          </div>

        </div>
            <div class="row justify-content-center mt-4">
              <button type="submit" id="submit-btn" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
            </div>
        </form>
      </div>
    </div>

    <!-- Form Sizing -->

    <!-- Horizontal Form -->

  </div>
</div>
<!--Row-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
  <script type="text/javascript">
    "use strict";
    function isEmpty(el){
        return !$.trim(el.html())
    }


  $("#lang-btn").on('click', function(){

      $("#lang-section").append(''+
                                  '<div class="lang-area mb-3">'+
                                    '<span class="remove lang-remove"><i class="fas fa-times"></i></span>'+
                                    '<div class="row">'+
                                      '<div class="col-lg-6">'+
                                      '<textarea name="keys[]" class="form-control" placeholder="<?php echo e(__('Enter Language Key')); ?>" required=""></textarea>'+
                                      '</div>'+
                                      '<div class="col-lg-6">'+
                                      '<textarea  name="values[]" class="form-control" placeholder="<?php echo e(__('Enter Language Value')); ?>" required=""></textarea>'+
                                      '</div>'+
                                    '</div>'+
                                  '</div>'+
                              '');

  });

  $(document).on('click','.lang-remove', function(){

      $(this.parentNode).remove();
      if (isEmpty($('#lang-section'))) {

      $("#lang-section").append(''+
                                  '<div class="lang-area">'+
                                    '<span class="remove lang-remove"><i class="fas fa-times"></i></span>'+
                                    '<div class="row">'+
                                      '<div class="col-lg-6">'+
                                      '<textarea name="keys[]" class="form-control" placeholder="<?php echo e(__('Enter Language Key')); ?>" required=""></textarea>'+
                                      '</div>'+
                                      '<div class="col-lg-6">'+
                                      '<textarea  name="values[]" class="form-control" placeholder="<?php echo e(__('Enter Language Value')); ?>" required=""></textarea>'+
                                      '</div>'+
                                    '</div>'+
                                  '</div>'+
                              '');


      }

  });

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/admin/language/edit.blade.php ENDPATH**/ ?>