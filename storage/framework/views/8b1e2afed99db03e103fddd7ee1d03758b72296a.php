<?php $__env->startSection('title', 'Пользователи'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/prism.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Пользователи</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Пользователи</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row starter-main">
        <div class="col-sm-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-table', [])->html();
} elseif ($_instance->childHasBeenRendered('OR1OLxt')) {
    $componentId = $_instance->getRenderedChildComponentId('OR1OLxt');
    $componentTag = $_instance->getRenderedChildComponentTagName('OR1OLxt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OR1OLxt');
} else {
    $response = \Livewire\Livewire::mount('user-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('OR1OLxt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

    </div>
</div>
    <script type="text/javascript">
        var session_layout = '<?php echo e(session()->get('layout')); ?>';
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\OSPanel\domains\kinotalk-app\resources\views/Admin/user/index.blade.php ENDPATH**/ ?>