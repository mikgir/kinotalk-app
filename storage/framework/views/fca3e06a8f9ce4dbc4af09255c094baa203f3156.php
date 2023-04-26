<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Таблица категорий</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Категории</li>
    <li class="breadcrumb-item active">Таблица категорий</li>
<?php $__env->stopSection(); ?>
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>КАТЕГОРИИ НОВОСТЕЙ</h3>
                    <div>
                        <a href="<?php echo e(route('admin.news.categories.create')); ?>" class="btn btn-outline-primary"> Добавить категорию</a>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="border-bottom-primary">
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Наименование</th>
                            <th class="text-center" scope="col">Order</th>
                            <th class="text-center" scope="col">Дата создания </th>
                            <th class="text-center" scope="col">Дата изменения</th>
                            <th class="text-center" scope="col">Изменить</th>
                            <th class="text-center" scope="col">Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $newsCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-bottom-secondary">
                            <th class="text-center" scope="row"><?php echo e($newsCategory->id); ?></th>
                            <td class="text-center"><?php echo e($newsCategory->name); ?></td>
                            <td class="text-center"><?php echo e($newsCategory->order); ?></td>
                            <td class="text-center"><?php echo e($newsCategory->created_at); ?></td>
                            <td class="text-center"><?php echo e($newsCategory->updated_at); ?></td>
                            <td class="text-center"><a href="<?php echo e(route('admin.news.categories.edit', $newsCategory->id)); ?>" class="btn btn-outline-success">EDIT</a></td>
                            <td class="text-center"> <a href="<?php echo e(route('admin.news.categories.delete', $newsCategory->id)); ?>" class="btn btn-outline-danger">DELETE</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/livewire/admin/news-categories/show-news-categories.blade.php ENDPATH**/ ?>