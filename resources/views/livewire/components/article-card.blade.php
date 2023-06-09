<div class="latest__post-item">
    <div class="latest__post-thumb tgImage__hover">
        <a href="{{route('article.show', $article->id)}}"><img src="{{asset($article->image)}}" style="width: 820px; height: auto" alt="img"></a>
    </div>
    <div class="latest__post-content">
        <ul class="tgbanner__content-meta list-wrap">
            <li class="category"><a href="#">Категория: "title"</a></li>
            <li><span class="by">Автор:</span><a href="">Любовь и Сериалы</a></li>
            <li>{{$article->updated_at}}</li>
        </ul>
        <h3 class="title tgcommon__hover"><a href="{{route('article.show', $article->id)}}">{{$article->title}}</a></h3>
        <p>{{$article->excerpt}} </p>
        <div class="latest__post-read-more">
            <a href="{{route('article.show', $article->id)}}">Читать дальше <i class="far fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
