<div class="latest__post-item">
    <div class="latest__post-thumb tgImage__hover">
        <a href="#"><img src="{{asset($image)}}" alt="img"></a>
    </div>
    <div class="latest__post-content">
        <ul class="tgbanner__content-meta list-wrap">
            <li class="category"><a href="#">Статья: "title"</a></li>
            <li><span class="by">Автор:</span><a href="">Любовь и Сериалы</a></li>
            <li>{{$pub_date}}</li>
        </ul>
        <h3 class="title tgcommon__hover"><a href="#">{{$title}}</a></h3>
        <p>{{$excerpt}} </p>
        <div class="latest__post-read-more">
            <a href="#">Читать дальше <i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
