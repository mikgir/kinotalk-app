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

        <!-- Scripts -->

        <?php echo $__env->yieldContent('style'); ?>
    </head>
    <body <?php if(Route::current()->getName() == 'admin'): ?> onload="startTime()" <?php elseif(Route::current()->getName() == 'button-builder'): ?> class="button-builder" <?php endif; ?>>

        <?php echo $__env->yieldContent('header'); ?>



            <!-- Page Heading -->








            <!-- Page Content -->
            <main>
               <?php echo $__env->yieldContent('main'); ?>
            </main>
        <?php echo $__env->yieldContent('footer'); ?>

    <?php echo $__env->yieldContent('script'); ?>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>


    </body>
</html>
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>