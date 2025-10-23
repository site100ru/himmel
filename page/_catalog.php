<?php

/* @var $this yii\web\View */
?>
<div class="flex-fill d-flex justify-content-center">
    <div class="cat__thumbs d-none d-md-block mr-md-4 mr-lg-5" id="cat__thumbs">
        <div class="thumbs__area d-flex flex-column flex-wrap justify-content-start align-items-start align-content-start pb-md-3">
            <?php foreach($models as $i=>$model): ?>
            <?= $this->render('_catalog_thumb_reika', compact('i', 'model')); ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="preview__area">
        <div class="swiper-container swiper-container-preview pb-md-3">
            <div class="swiper-wrapper">
                <?php foreach($models as $model): ?>
                <?= $this->render('_catalog_item_' . $model->viewSuffix, compact('model')); ?>
                <?php endforeach; ?>
            </div>
            <div class="swiper__btnwrapper swiper__btnwrapper-prev d-block d-md-none"><div class="swiper__button swiper__button-prev"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></div></div>
            <div class="swiper__btnwrapper swiper__btnwrapper-next d-block d-md-none"><div class="swiper__button swiper__button-next"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></div></div>
        </div>
    </div>
</div>

<script>
var catPs = new PerfectScrollbar('#cat__thumbs', {
    suppressScrollY: true,
    useBothWheelAxes: true,
});

var catSwiper = new Swiper('.swiper-container-preview', {
    direction: 'horizontal',
    loop: false,
    preloadImages: false,
    lazy: {
        loadPrevNext: true,
    },
    navigation: {
        nextEl: '.swiper__button-next',
        prevEl: '.swiper__button-prev',
    },
    on: {
        slideChange: function() {
            var $thumb = $('.cat__thumb').eq(this.activeIndex);
            /*var pos = $thumb.position(),
                relPos = pos.left / catPs.contentWidth,
                wrapper = $thumb.closest('.ps--active-x').outerWidth();

            $thumb.closest('.ps--active-x').scrollLeft(wrapper * relPos);*/
            $thumb.addClass('active').siblings().removeClass('active');
        },
    }
});
$(document).on('click', '.cat__thumb', function(e) {
    catSwiper.slideTo($(this).index());
    $(this).addClass('active').siblings().removeClass('active');
});
</script>
