<main xmlns:livewire="">
    <section class="blog-details-area pt-80 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7">
                   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.article-content', ['article' => $article])->html();
} elseif ($_instance->childHasBeenRendered('l3958468189-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3958468189-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3958468189-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3958468189-0');
} else {
    $response = \Livewire\Livewire::mount('components.article-content', ['article' => $article]);
    $html = $response->html();
    $_instance->logRenderedChild('l3958468189-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <aside class="blog-sidebar">
                        <div class="widget sidebar-widget">
                            <div class="tgAbout-me">
                                <div class="tgAbout-thumb">
                                    <img src="<?php echo e(asset('assets/front/img/others/People6.png')); ?>" alt="me">
                                </div>
                                <div class="tgAbout-info">
                                    <p class="intro"><span>Любовь и Сериалы</span></p>
                                    <span class="designation">Автор статей по сериалам</span>
                                </div>
                                <div class="tgAbout-social">
                                    <a href="#"><i class="fab flaticon-instagram"></i></a>
                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                    <a href="#"><i class="fab fa-vk"></i></a>
                                </div>
                            </div>
                        </div>
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
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/livewire/front/articles/show-article.blade.php ENDPATH**/ ?>