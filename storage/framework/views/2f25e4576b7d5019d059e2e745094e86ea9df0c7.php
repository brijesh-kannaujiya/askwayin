<?php if(isset($data)): ?>
    <div class="dashboard-list-wraps bg-white rounded mb-4">
        <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
            <div class="dashboard-list-wraps-flx">
                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file me-2 theme-cl fs-sm"></i><?php echo app('translator')->get('Real estate Info'); ?></h4>
                 <button type="button" onclick="$(this).parent().parent().remove();" class="btn-close" aria-label="Close"></button>
            </div>
        </div>

        <div class="dashboard-list-wraps-body py-3 px-3">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Car Price'); ?></label>
                        <input type="text" name="car_price" class="form-control rounded" placeholder="<?php echo app('translator')->get('Car Price'); ?>"  value="<?php echo e($data->car_price); ?>"/>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Fuel type'); ?></label>
                        <input type="text" name="car_fuel_type" class="form-control rounded" placeholder="<?php echo app('translator')->get('Fuel type'); ?>"  value="<?php echo e($data->car_fuel_type); ?>"/>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Year of Manufacture'); ?></label>
                        <input type="text" name="car_manufacture_year" class="form-control rounded" placeholder="<?php echo app('translator')->get('Example: 2010'); ?>"  value="<?php echo e($data->car_manufacture_year); ?>"/>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Engine capacity'); ?></label>
                        <input type="text" name="car_engine_capacity" class="form-control rounded" placeholder="<?php echo app('translator')->get('Example: 500 cc'); ?>"  value="<?php echo e($data->car_engine_capacity); ?>"/>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Mileage'); ?></label>
                        <input type="text" name="car_mileage" class="form-control rounded" placeholder="<?php echo app('translator')->get('Example: 22 KM/L'); ?>" value="<?php echo e($data->car_mileage); ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="dashboard-list-wraps bg-white rounded mb-4">
        <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
            <div class="dashboard-list-wraps-flx">
                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file me-2 theme-cl fs-sm"></i><?php echo app('translator')->get('Real estate Info'); ?></h4>
                 <button type="button" onclick="$(this).parent().parent().remove();" class="btn-close" aria-label="Close"></button>
            </div>
        </div>

        <div class="dashboard-list-wraps-body py-3 px-3">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Car Price'); ?></label>
                        <input type="text" name="car_price" class="form-control rounded" placeholder="<?php echo app('translator')->get('Car Price'); ?>" />
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Fuel type'); ?></label>
                        <input type="text" name="car_fuel_type" class="form-control rounded" placeholder="<?php echo app('translator')->get('Fuel type'); ?>" />
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Year of Manufacture'); ?></label>
                        <input type="text" name="car_manufacture_year" class="form-control rounded" placeholder="<?php echo app('translator')->get('Example: 2010'); ?>" />
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Engine capacity'); ?></label>
                        <input type="text" name="car_engine_capacity" class="form-control rounded" placeholder="<?php echo app('translator')->get('Example: 500 cc'); ?>" />
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label class="mb-1"><?php echo app('translator')->get('Mileage'); ?></label>
                        <input type="text" name="car_mileage" class="form-control rounded" placeholder="<?php echo app('translator')->get('Example: 22 KM/L'); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php /**PATH /home/u856343279/domains/askwayin.com/public_html/project/resources/views/partials/user/listing/car.blade.php ENDPATH**/ ?>