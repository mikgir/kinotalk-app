<div class="latest__post-item">
    <div class="latest__post-thumb tgImage__hover">
        <a href="#"><img src="<?php echo e(asset($article->image)); ?>" style="width: 820px; height: auto" alt="img"></a>
    </div>
    <div class="latest__post-content">
        <ul class="tgbanner__content-meta list-wrap">
            <li class="category"><a href="#">Статья: "title"</a></li>
            <li><span class="by">Автор:</span><a href="">Любовь и Сериалы</a></li>
            <li><?php echo e($article->updated_at); ?></li>
        </ul>
        <h3 class="title tgcommon__hover"><a href="#"><?php echo e($article->title); ?></a></h3>
        <p><?php echo e($article->body); ?> </p>
        <div class="latest__post-read-more">
        </div>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\gb_kinotalk\kinotalk-app\resources\views/livewire/components/article-content.blade.php ENDPATH**/ ?>