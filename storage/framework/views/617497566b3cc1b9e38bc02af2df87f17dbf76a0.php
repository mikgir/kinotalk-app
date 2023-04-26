<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Категории</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Категории</li>
    <li class="breadcrumb-item active">Создание категории</li>
<?php $__env->stopSection(); ?>
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Создать категорию</h3>
                </div>
                <div class="card-body">
                    <form class="form-control">
                        <div class="form-group">
                            <label for="name" class="col-form-label pt-0">Наименование</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="order" class="col-form-label pt-0">Order</label>
                            <input type="text" class="form-control" id="order" placeholder="Enter order" wire:model="order">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5 mb-5" wire:click="create">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/livewire/admin/news-categories/create-news-category.blade.php ENDPATH**/ ?>