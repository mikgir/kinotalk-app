<div id="sticky-header" class="tg-header__area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tgmenu__wrap">
                    <nav class="tgmenu__nav">
                        <div class="logo d-block d-md-none">
                            <a href="<?php echo e(route('main')); ?>" class="logo-dark"><img src="<?php echo e(asset('assets/front/img/logo/b_kinotalk.png')); ?>" alt="Logo"></a>
                            <a href="<?php echo e(route('main')); ?>" class="logo-light"><img src="<?php echo e(asset('assets/front/img/logo/w_kinotalk.png')); ?>" alt="Logo"></a>
                        </div>
                        <div class="offcanvas-toggle">
                            <a href="#"><i class="flaticon-menu-bar"></i></a>
                        </div>
                        <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                            <ul class="navigation">
                                <li class="active menu-item-has-children"><a href="<?php echo e(route('main')); ?>">Главные новости</a>
                                    <ul class="sub-menu">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="item <?php echo e($category->name === $category->id ? 'active' : ''); ?>">
                                            <a href="#"><?php echo e($category->name); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('articles')); ?>">Статьи</a></li>
                                <li><a href="<?php echo e(route('authors')); ?>">Авторы</a></li>
                                <li class="menu-item-has-children"><a href="#">Популярное</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Статьи</a></li>
                                        <li><a href="#">Авторы</a></li>
                                        <li><a href="#">Теги</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Подборки фильмов</a></li>
                            </ul>
                        </div>
                        <div class="tgmenu__action">
                            <ul class="list-wrap">
                                <li class="mode-switcher">
                                    <nav class="switcher__tab">
                                        <span class="switcher__btn light-mode"><i class="flaticon-sun"></i></span>
                                        <span class="switcher__mode"></span>
                                        <span class="switcher__btn dark-mode"><i class="flaticon-moon"></i></span>
                                    </nav>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                </div>
                <!-- Mobile Menu  -->
                <div class="tgmobile__menu">
                    <nav class="tgmobile__menu-box">
                        <div class="close-btn"><i class="fas fa-times"></i></div>
                        <div class="nav-logo">
                            <a href="#" class="logo-dark"><img src="<?php echo e(asset('assets/front/img/logo/b_kinotalk.png')); ?>" alt="Logo"></a>
                            <a href="#" class="logo-light"><img src="<?php echo e(asset('')); ?>assets/front/img/logo/w_kinotalk.png" alt="Logo"></a>
                        </div>
                        <div class="tgmobile__search">
                            <form action="#">
                                <input type="text" placeholder="Статьи, авторы, теги...">
                                <button><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="tgmobile__menu-outer">
                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                        </div>
                        <div class="social-links">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="tgmobile__menu-backdrop"></div>
                <!-- End Mobile Menu -->
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/livewire/components/header-navigation.blade.php ENDPATH**/ ?>