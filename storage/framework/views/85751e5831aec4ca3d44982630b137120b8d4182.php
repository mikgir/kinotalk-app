<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="<?php echo e(route('admin.index')); ?>"><img class="img-fluid for-light"
                                                                      src="<?php echo e(asset('assets/admin/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark"
                                                                                                                                   src="<?php echo e(asset('assets/admin/images/logo/logo_dark.png')); ?>" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="<?php echo e(route('admin.index')); ?>"><img class="img-fluid"
                                                                           src="<?php echo e(asset('assets/admin/images/logo/logo-icon.png')); ?>" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="<?php echo e(route('admin.index')); ?>"><img class="img-fluid"
                                                                             src="<?php echo e(asset('assets/admin/images/logo/logo-icon.png')); ?>" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                                                              aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Ура</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">Админ часть</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary">5</label><a class="sidebar-link sidebar-title"
                                                                             href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-home')); ?>"></use>
                            </svg><span class="lan-3">Пользователи</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="<?php echo e(route('admin.user.index')); ?>">Все пользователи</a></li>
                            <li><a class="lan-5" href="#">Ecommerce</a></li>
                            <li><a href="#">Online course</a></li>
                            <li><a href="#">Crypto</a></li>
                            <li><a href="#">Social</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                                                                                href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#stroke-widget')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/admin/svg/icon-sprite.svg#fill-widget')); ?>"></use>
                            </svg><span class="lan-6">Widgets</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">General</a></li>
                            <li><a href="#">Chart</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<?php /**PATH G:\OSPanel\domains\kinotalk-app\resources\views/Admin/layouts/sidebar.blade.php ENDPATH**/ ?>