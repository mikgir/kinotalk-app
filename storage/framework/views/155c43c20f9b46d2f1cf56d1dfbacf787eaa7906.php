<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="<?php echo e(route('home')); ?>">
                <h3>KINOTALK</h3>


            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="<?php echo e(route('home')); ?>">
                <h5>KINOTALK</h5>

            </a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="<?php echo e(route('admin.index')); ?>">
                            <h5>KINOTALK</h5>

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
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-home')); ?>"></use>
                            </svg><span class="lan-3">Dashboard</span></a>
                        <ul class="sidebar-submenu">





                        </ul>
                    </li>





















































































                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-email')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-email')); ?>"></use>
                            </svg><span>Email</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('email-application')); ?>">Email App</a></li>
                            <li><a href="<?php echo e(route('email-compose')); ?>">Email Compose</a></li>
                        </ul>
                    </li>












                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-user')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-user')); ?>"></use>
                            </svg><span>Users</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?php echo e(route('user-profile')); ?>">Users Profile</a></li>
                            <li><a href="<?php echo e(route('edit-profile')); ?>">Users Edit</a></li>
                            <li><a href="<?php echo e(route('user-cards')); ?>">Users Cards</a></li>
                        </ul>
                    </li>






































































































































































































































































































































































































































































































                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="<?php echo e(route('knowledgebase')); ?>">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-knowledgebase')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-knowledgebase')); ?>"></use>
                            </svg><span>Knowledgebase</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="<?php echo e(route('support-ticket')); ?>">
                            <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-support-tickets')); ?>"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-support-tickets')); ?>"></use>
                            </svg><span>Support Ticket</span></a></li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>