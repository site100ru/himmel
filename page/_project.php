<?php

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
?>
<div class="modal__content modal__content-project">
    <div class="project__imgs swiper-container swiper-container-project">
        <div class="swiper-wrapper">
            <?php $next = ''; foreach($model->imageUrls as $i=>$url): $next = (1 === $i) ? 'background-image: url('.ArrayHelper::getValue($url, 'icon').'); ' : $next; ?>
            <div class="swiper-slide swiper-lazy project__img" data-background="<?= ArrayHelper::getValue($url, 'base'); ?>" data-icon="<?= ArrayHelper::getValue($url, 'icon'); ?>"></div>
            <?php endforeach; ?>
        </div>
        <div class="swiper__btnwrapper swiper__btnwrapper-prev"><a href="#" class="swiper__button swiper__button-prev" title="Назад"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a><div class="slide-preview project__img" style="display: none;"></div></div>
        <div class="swiper__btnwrapper swiper__btnwrapper-next"><a href="#" class="swiper__button swiper__button-next" title="Вперед"><div class="swiper-button-icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div></a><div class="slide-preview project__img" style="<?= $next ?>display: none;"></div></div>
    </div>
    <script>
    $('._project__close').on('click', function() {
        $(this).closest('.content__overhead').fadeOut(200);
    });

    var prjSwiper = new Swiper('.swiper-container-project', {
        direction: 'horizontal',
        loop: false,
        effect: 'coverflow',
        preloadImages: false,
        lazy: {
            loadPrevNext: true,
        },
        navigation: {
            nextEl: '.swiper__button-next',
            prevEl: '.swiper__button-prev',
        },
        on: {
            init: function() {},
        },
    });
    </script>

    <?php if(!Yii::$app->devicer->isMobile()): ?>
    <div class="project__thumbs swiper-container swiper-container-thumbs">
        <div class="swiper-wrapper">
            <?php foreach($model->imageUrls as $url): ?>
            <div class="swiper-slide project__img" style="background-image: url('<?= ArrayHelper::getValue($url, 'thumb'); ?>')"></div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
    var thumbSwiper = new Swiper('.swiper-container-thumbs', {
        direction: 'horizontal',
        loop: false,
        spaceBetween: 24,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true,
    });
    prjSwiper.controller.control = thumbSwiper;
    thumbSwiper.controller.control = prjSwiper;

    prjSwiper.on('init, slideChangeTransitionEnd', function() {
        var prev = $(this.$el).find('.swiper-slide-prev').data('icon') ? 'url('+$(this.$el).find('.swiper-slide-prev').data('icon')+')' : '',
            next = $(this.$el).find('.swiper-slide-next').data('icon') ? 'url('+$(this.$el).find('.swiper-slide-next').data('icon')+')' : '';
        $(this.navigation.$prevEl).siblings('.slide-preview').css('background-image', prev);
        $(this.navigation.$nextEl).siblings('.slide-preview').css('background-image', next);
    });

    $('.swiper__button').on({
        mouseenter: function(e) { $(this).siblings('.slide-preview').show(); },
        mouseleave: function(e) { $(this).siblings('.slide-preview').hide(); },
    });
    </script>
    <?php endif; ?>

    <div class="content__overhead content__overhead-project">
        <a href="#" class="project__close _project__close" title="<?= Yii::t('hm', 'Закрыть описание'); ?>"></a>
        <div class="content__title"><?= Yii::t('hm/project', ArrayHelper::getValue($model, 'title')); ?></div>
        <h2 class="mb-3"><?= Yii::t('hm/project', ArrayHelper::getValue($model, 'name')); ?></h2>
        <div><?= Yii::t('hm/project', ArrayHelper::getValue($model, 'desc')); ?></div>
    </div>
</div>
