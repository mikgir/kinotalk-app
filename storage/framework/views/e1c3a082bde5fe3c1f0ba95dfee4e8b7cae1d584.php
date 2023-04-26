<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Категории</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Категории</li>
    <li class="breadcrumb-item active">Редактирование категории</li>
<?php $__env->stopSection(); ?>
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Редактирование категории</h3>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update(<?php echo e($newsCategory); ?>)" class="form-control">
                        <div class="form-group">
                            <label for="Post name" class="col-form-label pt-0">Наименование</label>
                            <input wire:model="newsCategory.name" type="text" name="name" id="name" class="form-control" placeholder="Name of the post">
                        </div>
                        <div class="form-group">
                            <label for="order" class="col-form-label pt-0">Order</label>
                            <input wire:model="newsCategory.order" type="text" name="order" id="order" class="form-control" placeholder="Order">
                        </div>
                        <div>
                            <button class="btn btn-primary mt-5 mb-5" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/livewire/admin/news-categories/edit-news-categories.blade.php ENDPATH**/ ?>