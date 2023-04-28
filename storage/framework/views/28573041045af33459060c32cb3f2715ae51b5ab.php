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
                <div class="table-responsive p-5">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users.user-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l2689772090-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2689772090-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2689772090-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2689772090-0');
} else {
    $response = \Livewire\Livewire::mount('admin.users.user-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2689772090-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/livewire/admin/users/users-list.blade.php ENDPATH**/ ?>