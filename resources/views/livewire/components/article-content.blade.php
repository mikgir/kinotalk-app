<div class="latest__post-item">
    <div class="latest__post-thumb tgImage__hover">
        <a href="#"><img src="{{asset($article->image)}}" style="width: 820px; height: auto" alt="img"></a>
    </div>
    <div class="latest__post-content">
        <ul class="tgbanner__content-meta list-wrap">
            <li class="category"><a href="#">Статья: "title"</a></li>
            <li><span class="by">Автор:</span><a href="">Любовь и Сериалы</a></li>
            <li>{{$article->updated_at}}</li>
        </ul>
        <h3 class="title tgcommon__hover"><a href="#">{{$article->title}}</a></h3>
        <p>{{$article->body}} </p>
        <div class="latest__post-read-more">
        </div>
    </div>
</div>
