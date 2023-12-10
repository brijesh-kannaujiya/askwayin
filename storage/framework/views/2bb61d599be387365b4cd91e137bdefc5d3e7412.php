<?php $__env->startSection('content'); ?>


    <div class="card">
        <div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('System Purchase Activation')); ?></h5>
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>

            <li class="breadcrumb-item"><a href="<?php echo e(route('admin-generate-backup')); ?>"><?php echo e(__('Generate BackUp')); ?></a></li>
        </ol>
        </div>
    </div>
    <!-- Row -->
    <div class="row mt-3">
      <!-- Datatables -->
      <div class="col-lg-12">

        <?php echo $__env->make('includes.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card mb-4">
            <div class="card-body">
              <div class="gocover" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
              <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div style="padding: 10px;" class="text-center">
                    <?php if($bkuplink == ""): ?>
                        <span id="bkupData"><?php echo e(__('No Backup File Generated.')); ?></span>
                    <?php else: ?>
                        <span id="bkupData"><a href="<?php echo e($bkuplink); ?>"><?php echo e($chk); ?></a><a href="<?php echo e(route('admin-clear-backup')); ?>"> <i class="fa fa-times-circle"></i></a></span>
                    <?php endif; ?>
                </div>

                <hr/>
                <div class="add-product-footer text-center">
                    <button name="addProduct_btn" id="generateBkup" type="button" class="addProductSubmit-btn btn btn-primary"><?php echo e(__('Generate Backup')); ?></button>
                </div>
            </div>
          </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
"use strict";
    $("#generateBkup").on('click',function(){
        $('#bkupData').html('<img style="height:100px;" src="<?php echo e(asset("assets/images/".$gs->loader)); ?>"><br><?php echo e(__('Generating Backup... Please wait....')); ?>');
        $.ajax({
            url: "<?php echo e(url('admin/check/movescript')); ?>",
            success: function(result){
                if(result.status == 'success'){
                    $("#bkupData").html('<a href="'+result.backupfile+'">'+result.filename+'</a>');
                }
            }
        });
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/admin/movetoserver.blade.php ENDPATH**/ ?>