<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" xmlns:livewire="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendors/bootstrap.css')); ?>">
        <?php echo \Livewire\Livewire::styles(); ?>

        <?php echo $__env->yieldContent('style'); ?>

    </head>
    <body>

    <?php echo $__env->make('layouts.temp_navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.main-page', [])->html();
} elseif ($_instance->childHasBeenRendered('MO0BoSA')) {
    $componentId = $_instance->getRenderedChildComponentId('MO0BoSA');
    $componentTag = $_instance->getRenderedChildComponentTagName('MO0BoSA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MO0BoSA');
} else {
    $response = \Livewire\Livewire::mount('front.main-page', []);
    $html = $response->html();
    $_instance->logRenderedChild('MO0BoSA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/layouts/guest.blade.php ENDPATH**/ ?>