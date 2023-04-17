<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <?php echo $__env->yieldContent('style'); ?>
        <!-- Scripts -->

    </head>
    <body>

    <?php echo $__env->make('layouts.temp_navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('main'); ?>

        <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
<?php /**PATH C:\OpenServer\domains\localhost\kinotalk-app\resources\views/layouts/guest.blade.php ENDPATH**/ ?>