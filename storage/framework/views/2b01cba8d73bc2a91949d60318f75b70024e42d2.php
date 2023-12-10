    <!-- Room Booking -->
    <div class="jb-apply-form bg-white rounded py-4 px-4 border mb-4">
        <h4 class="ft-bold mb-1"><?php echo app('translator')->get('Make an appointment'); ?></h4>

        <form action="<?php echo e(route('user.booking.store')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="listing_id" value="<?php echo e($data->id); ?>">
            <input type="hidden" name="listing_owner_id" value="<?php echo e($data->user_id != NULL ? $data->user_id : 0); ?>">
            <input type="hidden" name="owner_type" value="<?php echo e($data->user_id != NULL ? 'user' : 'admin'); ?>">
            <input type="hidden" name="type" value="beauty">

            <div class="Rego-boo-space mt-3">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="ft-medium small mb-1"><?php echo app('translator')->get('Check In'); ?></label>
                            <div class="cld-box">
                                <i class="ti-calendar"></i>
                                <input type="text" name="checkin" class="form-control" value="<?php echo e(now()->format('m/d/Y')); ?>" placeholder="Check In" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="ft-medium small mb-1"><?php echo app('translator')->get('Service'); ?></label>
                            <select class="border form-control rounded ps-3" name="service_id">
                                <option value=""><?php echo app('translator')->get('Select a service'); ?></option>
                                <?php $__currentLoopData = $data->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($service->id); ?>"><?php echo e($service->service_name); ?> (<?php echo e($service->service_from); ?> <?php echo app('translator')->get('To'); ?> <?php echo e($service->service_to); ?>)</option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group mb-3">
                            <label class="mb-1"><?php echo app('translator')->get('Note'); ?></label>
                            <textarea class="form-control border rounded ps-3" name="note" placeholder="<?php echo app('translator')->get('Write note'); ?>"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="btn text-light rounded full-width theme-bg ft-medium"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/partials/front/listing/beauty.blade.php ENDPATH**/ ?>