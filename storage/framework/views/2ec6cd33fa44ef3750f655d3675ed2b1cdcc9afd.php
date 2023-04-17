
<?php $__env->startSection('title', 'Comingsoon BG Video'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <!-- Page Body Start-->
  <div class="container-fluid p-0">
    <div class="comingsoon auth-bg-video">
      <video class="bgvideo-comingsoon" id="bgvid" poster="<?php echo e(asset('assets/images/other-images/coming-soon-bg.jpg')); ?>" playsinline="" autoplay="" muted="" loop="">
        <source src="<?php echo e(asset('assets/video/auth-bg.mp4')); ?>" type="video/mp4">
      </video>
      <div class="comingsoon-inner text-center"><img src="<?php echo e(asset('assets/images/other-images/coming-soon-Logo.png')); ?>" alt="">
        <h5>WE ARE COMING SOON</h5>
        <div class="countdown" id="clockdiv">
          <ul>
            <li><span class="time digits" id="days"></span><span class="title">days</span></li>
            <li><span class="time digits" id="hours"></span><span class="title">Hours</span></li>
            <li><span class="time digits" id="minutes"></span><span class="title">Minutes</span></li>
            <li><span class="time digits" id="seconds"></span><span class="title">Seconds</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/countdown.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.comingsoon.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\kinotalk-app\resources\views/comingsoon/comingsoon-bg-video.blade.php ENDPATH**/ ?>