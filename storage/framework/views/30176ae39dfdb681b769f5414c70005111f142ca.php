<main xmlns:livewire="">
    <section class="blog-details-area pt-80 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-post-wrapper">

                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.article-card', ['article' => $article])->html();
} elseif ($_instance->childHasBeenRendered('l1152499952-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1152499952-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1152499952-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1152499952-0');
} else {
    $response = \Livewire\Livewire::mount('components.article-card', ['article' => $article]);
    $html = $response->html();
    $_instance->logRenderedChild('l1152499952-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="pagination__wrap">
                            <ul class="list-wrap">
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">06</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <aside class="blog-sidebar">
















                        <div class="widget sidebar-widget widget_categories">
                            <h4 class="widget-title">Популярная категория</h4>
                            <ul class="list-wrap">
                                <li>
                                    <div class="thumb"><a href="#"><img src="<?php echo e(asset('assets/front/img/category/Mira.png')); ?>" alt="img"></a></div>
                                    <a href="#">Новинки кино</a>
                                    <span class="float-right">12</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="<?php echo e(asset('assets/front/img/category/ForrestGump.png')); ?>" alt="img"></a></div>
                                    <a href="#">Классика кино</a>
                                    <span class="float-right">10</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="<?php echo e(asset('assets/front/img/category/Sansara.png')); ?>" alt="img"></a></div>
                                    <a href="#">Сериалы</a>
                                    <span class="float-right">08</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="<?php echo e(asset('assets/front/img/category/TheBBTheory.png')); ?>" alt="img"></a></div>
                                    <a href="#">Ситкомы</a>
                                    <span class="float-right">06</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="<?php echo e(asset('assets/front/img/category/FrozenGround.png')); ?>" alt="img"></a></div>
                                    <a href="#">В фокусе</a>
                                    <span class="float-right">06</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>


<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/livewire/front/articles/articles.blade.php ENDPATH**/ ?>