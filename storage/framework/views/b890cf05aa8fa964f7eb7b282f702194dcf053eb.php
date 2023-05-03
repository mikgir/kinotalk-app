<main xmlns:livewire="">
    <!-- banner-area -->
   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.tg-banner', [])->html();
} elseif ($_instance->childHasBeenRendered('l3716143198-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3716143198-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3716143198-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3716143198-0');
} else {
    $response = \Livewire\Livewire::mount('components.tg-banner', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3716143198-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- banner-area-end -->

    <!-- trending-area -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.trending-posts', [])->html();
} elseif ($_instance->childHasBeenRendered('l3716143198-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3716143198-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3716143198-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3716143198-1');
} else {
    $response = \Livewire\Livewire::mount('components.trending-posts', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3716143198-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- trending-area-end -->

    <!-- featured-area -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.featured-post', [])->html();
} elseif ($_instance->childHasBeenRendered('l3716143198-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3716143198-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3716143198-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3716143198-2');
} else {
    $response = \Livewire\Livewire::mount('components.featured-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3716143198-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- featured-area-end -->

    <!-- hand-picked-area -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.hand-picked', [])->html();
} elseif ($_instance->childHasBeenRendered('l3716143198-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l3716143198-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3716143198-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3716143198-3');
} else {
    $response = \Livewire\Livewire::mount('components.hand-picked', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3716143198-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- hand-picked-area-end -->

    <!-- stories-post-area -->
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.stories-post', [])->html();
} elseif ($_instance->childHasBeenRendered('l3716143198-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l3716143198-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3716143198-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3716143198-4');
} else {
    $response = \Livewire\Livewire::mount('components.stories-post', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3716143198-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- stories-post-area-end -->
</main>
<?php /**PATH D:\OSPanel\domains\kinoyalk_dev\resources\views/livewire/front/main-page.blade.php ENDPATH**/ ?>