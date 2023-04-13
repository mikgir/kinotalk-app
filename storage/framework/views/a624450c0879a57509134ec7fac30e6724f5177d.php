    <?php $__env->startSection('style'); ?>
        <?php echo $__env->make('layouts.authentication.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
    <!-- login page start-->
    <?php $__env->startSection('main'); ?>
        <?php echo $__env->yieldContent('content'); ?>
    <?php $__env->stopSection(); ?>
    <!-- latest jquery-->

    <?php echo $__env->make('layouts.authentication.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/layouts/authentication/master.blade.php ENDPATH**/ ?>