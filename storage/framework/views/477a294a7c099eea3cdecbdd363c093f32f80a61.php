<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3"><?php echo e(__('Change Password')); ?></h5>
        <ol class="breadcrumb py-0 m-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.password')); ?>"><?php echo e(__('Change Password')); ?></a></li>
        </ol>
        </div>
    </div>

    <div class="card mb-4 mt-3">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Change Password Form')); ?></h6>
      </div>

      <div class="card-body">
        <div class="gocover" style=""></div>
        <form class="geniusform" action="<?php echo e(route('admin.password.update')); ?>" method="POST" >

            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo e(csrf_field()); ?>


            <div class="form-group">
                <label for="inp-cpass"><?php echo e(__('Current Password')); ?></label>
                <input type="password" class="form-control" id="inp-cpass" name="cpass"  placeholder="<?php echo e(__('Enter Current Password')); ?>" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-newpass"><?php echo e(__('New Password')); ?></label>
                <input type="password" class="form-control" id="inp-newpass" name="newpass"  placeholder="<?php echo e(__('Enter New Password')); ?>" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-renewpass"><?php echo e(__('Re-Type New Password')); ?></label>
                <input type="password" class="form-control" id="inp-renewpass" name="renewpass"  placeholder="<?php echo e(__('Re-Type New Password')); ?>" value="" required>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100"><?php echo e(__('Submit')); ?></button>

        </form>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/admin/password.blade.php ENDPATH**/ ?>