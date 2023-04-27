<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Таблица пользователей</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Пользователи</li>
    <li class="breadcrumb-item active">Таблица пользователей</li>
<?php $__env->stopSection(); ?>
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>СПИСОК ПОЛЬЗОВАТЕЛЕЙ</h3>




                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="border-bottom-primary">
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Аватар</th>
                            <th class="text-center" scope="col">Имя</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Дата регистрации</th>
                            <th class="text-center" scope="col">Дата изменения</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-bottom-secondary">
                                <th class="text-center" scope="row"><?php echo e($user->id); ?></th>
                                <td class="text-center"><img src="<?php echo e(asset($user->avatar)); ?>" style="width: 30px; height: 30px"></td>
                                <td class="text-center"><?php echo e($user->name); ?></td>
                                <td class="text-center"><?php echo e($user->email); ?></td>
                                <td class="text-center"><?php echo e($user->created_at); ?></td>
                                <td class="text-center"><?php echo e($user->updated_at); ?></td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/livewire/admin/users/users-list.blade.php ENDPATH**/ ?>