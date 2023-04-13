<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<?php $__env->startSection('style'); ?>
    <?php echo $__env->make('layouts.profile.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
    <?php echo $__env->yieldContent('css'); ?>

  
<?php $__env->startSection('main'); ?>
  <main>










    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-body-wrapper">
        <div class="page-body">
          <div class="container-fluid">
              <div class="page-title">
                  <div class="row">
                      <div class="col-6">
                          <?php echo $__env->yieldContent('breadcrumb-title'); ?>
                      </div>
                      <div class="col-6">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard-05')); ?>">
                                      <svg class="stroke-icon">
                                          <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                                      </svg></a></li></li>
                              <?php echo $__env->yieldContent('breadcrumb-items'); ?>
                          </ol>
                      </div>
                  </div>
              </div>
              <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
      </div>
    </div>

  </main>
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <?php echo $__env->make('layouts.profile.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('script'); ?>
        <!-- latest jquery-->
        <!-- Plugin used-->

        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/layouts/profile/master.blade.php ENDPATH**/ ?>