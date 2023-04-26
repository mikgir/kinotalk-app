<main xmlns:livewire="">
    <section class="blog-details-area pt-80 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7">
                   <livewire:components.article-content :article="$article"/>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <aside class="blog-sidebar">
                        <div class="widget sidebar-widget">
                            <div class="tgAbout-me">
                                <div class="tgAbout-thumb">
                                    <img src="{{asset('assets/front/img/others/People6.png')}}" alt="me">
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
                                    <div class="thumb"><a href="#"><img src="{{asset('assets/front/img/category/Mira.png')}}" alt="img"></a></div>
                                    <a href="#">Новинки кино</a>
                                    <span class="float-right">12</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="{{asset('assets/front/img/category/ForrestGump.png')}}" alt="img"></a></div>
                                    <a href="#">Классика кино</a>
                                    <span class="float-right">10</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="{{asset('assets/front/img/category/Sansara.png')}}" alt="img"></a></div>
                                    <a href="#">Сериалы</a>
                                    <span class="float-right">08</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="{{asset('assets/front/img/category/TheBBTheory.png')}}" alt="img"></a></div>
                                    <a href="#">Ситкомы</a>
                                    <span class="float-right">06</span>
                                </li>
                                <li>
                                    <div class="thumb"><a href="#"><img src="{{asset('assets/front/img/category/FrozenGround.png')}}" alt="img"></a></div>
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
