    <?php $__env->startSection('style'); ?>
        <?php echo \Livewire\Livewire::styles(); ?>

    <?php $__env->stopSection(); ?>
    <!-- login page start-->
    <?php $__env->startSection('main'); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.main-page', [])->html();
} elseif ($_instance->childHasBeenRendered('gZwJ9Cl')) {
    $componentId = $_instance->getRenderedChildComponentId('gZwJ9Cl');
    $componentTag = $_instance->getRenderedChildComponentTagName('gZwJ9Cl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gZwJ9Cl');
} else {
    $response = \Livewire\Livewire::mount('front.main-page', []);
    $html = $response->html();
    $_instance->logRenderedChild('gZwJ9Cl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php $__env->stopSection(); ?>
    <!-- latest jquery-->

    <?php $__env->startSection('script'); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/layouts/front/master.blade.php ENDPATH**/ ?>