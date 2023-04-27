<!-- header-area -->
<header xmlns:livewire="">
    <div class="header__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-6 order-2 order-lg-0">
                    <div class="header__top-search">
                        <form action="#">
                            <input type="text" placeholder="Статьи, авторы, теги...">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 order-0 order-lg-2 d-none d-md-block">
                    <div class="header__top-logo logo text-lg-center">
                        <a href="#" class="logo-dark"><img src="<?php echo e(asset('assets/front/img/logo/b_kinotalk.png')); ?>" alt="Logo"></a>
                        <a href="#" class="logo-light"><img src="<?php echo e(asset('assets/front/img/logo/w_kinotalk.png')); ?>" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 order-3 d-none d-sm-block">
                    <div class="header__top-right">
                        <ul class="list-wrap">
                            <li class="news-btn">
                                <?php if(Route::has('login')): ?>
                                    <div class="dropdown">
                                        <?php if(auth()->guard()->check()): ?>
                                            <a class="dropdown-toggle btn" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="btn-text"><i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?></span>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                                    <li>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('main')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('main'))]); ?>
                                                            <?php echo e(__('Главная')); ?>

                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    </li>
                                                    <li>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('profile.edit')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('profile.edit'))]); ?>
                                                            <?php echo e(__('Профиль')); ?>

                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    </li>
                                                    <li>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('admin.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.index'))]); ?>
                                                            <?php echo e(__('Админ')); ?>

                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    </li>
                                                    <li>
                                                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                                                            <?php echo csrf_field(); ?>

                                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']); ?>
                                                                <?php echo e(__('Выход')); ?>

                                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('login')); ?>" class="btn"><span class="btn-text">Войти</span></a>

                                            <?php if(Route::has('register')): ?>
                                                <a href="<?php echo e(route('register')); ?>" class="btn"><span class="btn-text">Регистрация</span></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                            </li>
                            <li class="lang">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        RU
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">ENG</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="header-fixed-height"></div>
    <!-- Sticky-navigation-area -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.header-navigation', [])->html();
} elseif ($_instance->childHasBeenRendered('Q5P5QSA')) {
    $componentId = $_instance->getRenderedChildComponentId('Q5P5QSA');
    $componentTag = $_instance->getRenderedChildComponentTagName('Q5P5QSA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Q5P5QSA');
} else {
    $response = \Livewire\Livewire::mount('components.header-navigation', []);
    $html = $response->html();
    $_instance->logRenderedChild('Q5P5QSA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- Sticky-navigation-area-end -->
    <!-- offCanvas-area -->
    <div class="offCanvas__wrap">
        <div class="offCanvas__body">
            <div class="offCanvas__toggle"><i class="flaticon-addition"></i></div>
            <div class="offCanvas__content">
                <div class="offCanvas__logo logo">
                    <a href="#" class="logo-dark"><img src="<?php echo e(asset('assets/front/img/logo/b_kinotalk.png')); ?>" alt="Logo"></a>
                    <a href="#" class="logo-light"><img src="<?php echo e(asset('assets/front/img/logo/w_kinotalk.png')); ?>" alt="Logo"></a>
                </div>
                <p>KinoTalk&nbsp;&mdash; это разговоры о&nbsp;кино,
                    где в&nbsp;уютной обстановке любители кино при помощи
                    статей обмениваются мнениями о&nbsp;современном кинематографе.</p>
                <p class="offCanvas__title">Популярные авторы KINOTALK</p>
                <ul class="offCanvas__instagram list-wrap">
                    <li><a href="<?php echo e(asset('assets/front/img/blog/blog01.jpg')); ?>" class="popup-image"><img src="<?php echo e(asset('assets/front/img/blog/People1.png')); ?>" alt="img"></a></li>
                    <li><a href="<?php echo e(asset('assets/front/img/blog/blog02.jpg')); ?>" class="popup-image"><img src="<?php echo e(asset('assets/front/img/blog/People3.png')); ?>" alt="img"></a></li>
                    <li><a href="<?php echo e(asset('assets/front/img/blog/blog03.jpg')); ?>" class="popup-image"><img src="<?php echo e(asset('assets/front/img/blog/People4.png')); ?>" alt="img"></a></li>
                    <li><a href="<?php echo e(asset('assets/front/img/blog/blog04.jpg')); ?>" class="popup-image"><img src="<?php echo e(asset('assets/front/img/blog/People2.png')); ?>" alt="img"></a></li>
                    <li><a href="<?php echo e(asset('assets/front/img/blog/blog05.jpg')); ?>" class="popup-image"><img src="<?php echo e(asset('assets/front/img/blog/People6.png')); ?>" alt="img"></a></li>
                    <li><a href="<?php echo e(asset('assets/front/img/blog/blog06.jpg')); ?>" class="popup-image"><img src="<?php echo e(asset('assets/front/img/blog/People5.png')); ?>" alt="img"></a></li>
                </ul>
            </div>
            <div class="offCanvas__contact">
                <h4 class="title">Связаться с нами</h4>
                <ul class="offCanvas__contact-list list-wrap">
                    <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">info@webmail.com</a></li>
                    <li><i class="fas fa-phone"></i><a href="tel:88899988877">888 999 888 77</a></li>
                    <li><i class="fas fa-map-marker-alt"></i>Адрес</li>
                </ul>
                <ul class="offCanvas__social list-wrap">
                    <li><a href="#"><i class="fab flaticon-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a href="#"><i class="fab fa-vk"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="offCanvas__overlay"></div>
    <!-- offCanvas-area-end -->

</header>
<!-- header-area-end -->
<?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/layouts/front/header.blade.php ENDPATH**/ ?>