

    <?php $__env->startSection('style'); ?>
       <?php echo $__env->make('layouts.front.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('preloader'); ?>
        <!-- preloader -->









        <!-- preloader-end -->

        <!-- Scroll-top -->
        <button class="scroll__top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('header'); ?>
        <?php echo $__env->make('layouts.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main'); ?>
        <?php echo $__env->yieldContent('content'); ?>

    <?php $__env->stopSection(); ?>
    <!-- latest jquery-->
    <?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <?php echo $__env->make('layouts.front.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/layouts/front/master.blade.php ENDPATH**/ ?>