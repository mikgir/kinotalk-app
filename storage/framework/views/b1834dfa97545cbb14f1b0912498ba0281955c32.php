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

        <?php echo $__env->yieldContent('style'); ?>

    </head>
    <body>
        <?php echo $__env->yieldContent('preloader'); ?>


       <?php echo $__env->yieldContent('header'); ?>
       <?php echo $__env->yieldContent('main'); ?>


        <?php echo $__env->yieldContent('footer'); ?>
        <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
<?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/layouts/guest.blade.php ENDPATH**/ ?>