<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="<?php echo e(route('main')); ?>" class="link-dark">
                <h3>KINOTALK</h3>


            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="<?php echo e(route('main')); ?>" class="link-dark">
                <h5>KINOTALK</h5>

            </a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="<?php echo e(route('admin.index')); ?>" class="link-dark">
                            <h5>KINOTALK/ADMIN</h5>

                        </a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-light-primary">5</label><a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-home')); ?>"></use>
                            </svg><span class="lan-3">Dashboard</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="<?php echo e(route('dashboard-05')); ?>">Default</a></li>




                        </ul>
                    </li>





























                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">Applications</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-light-secondary">New</label><a class="sidebar-link sidebar-title"
                                                                                 href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-project')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-project')); ?>"></use>
                            </svg><span>Пользователи</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.users.index')); ?>">Список пользователей</a></li>

                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-light-secondary">New</label><a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-project')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-project')); ?>"></use>
                            </svg><span>Категории</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.category.index')); ?>">Категории новостей</a></li>

                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-light-secondary">New</label><a class="sidebar-link sidebar-title"
                                                                                 href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-project')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-project')); ?>"></use>
                            </svg><span>Статьи</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.article.index')); ?>">Список статей</a></li>

                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-light-secondary">New</label><a class="sidebar-link sidebar-title"
                                                                                 href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-project')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-project')); ?>"></use>
                            </svg><span>Комментарии</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.comment.index')); ?>">Список комментариев</a></li>

                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-light-secondary">New</label><a class="sidebar-link sidebar-title"
                                                                                 href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-project')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-project')); ?>"></use>
                            </svg><span>Роли</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.role.index')); ?>">Список ролей</a></li>

                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-light-secondary">New</label><a class="sidebar-link sidebar-title"
                                                                                 href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-project')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-project')); ?>"></use>
                            </svg><span>Разрешения</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('admin.permission.index')); ?>">Список разрешений</a></li>

                        </ul>
                    </li>
































































































































































































































































































































































































































































































































































































                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>