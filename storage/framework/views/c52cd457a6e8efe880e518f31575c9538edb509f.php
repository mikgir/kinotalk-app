
 <!-- latest jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/admin/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/admin/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- scrollbar js-->
<script src="<?php echo e(asset('assets/admin/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/scrollbar/custom.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/admin/js/config.js')); ?>"></script>
<!-- Plugins JS start-->
<script src="<?php echo e(asset('assets/admin/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/chart/apex-chart/stock-prices.js')); ?>"></script>
<script id="menu" src="<?php echo e(asset('assets/admin/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/slick/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/slick/slick.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/header-slick.js')); ?>"></script>
 <?php echo \Livewire\Livewire::scripts(); ?>

 @powerGridScripts
<?php echo $__env->yieldContent('script'); ?>

<?php if(Route::current()->getName() != 'popover'): ?>
	<script src="<?php echo e(asset('assets/admin/js/tooltip-init.js')); ?>"></script>
<?php endif; ?>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/admin/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/theme-customizer/customizer.js')); ?>"></script>









<?php /**PATH G:\OSPanel\domains\kinotalk-app\resources\views/Admin/layouts/script.blade.php ENDPATH**/ ?>