<?php $__env->startSection('title','Админка'); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Главная</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Главная</li>
    <li class="breadcrumb-item active">Главная страница</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Графики</h3>
                    </div>
                    <div class="table-responsive p-5">

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/livewire/admin/admin-index.blade.php ENDPATH**/ ?>