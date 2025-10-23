<?php

use common\models\Color;

/* @var $this yii\web\View */
?>
<div class="modal__content modal__content-color align-self-center d-flex flex-column">
    <div class="mb-4">
        <div class="content__title mb-2"><?= Yii::t('hm', 'Окрашивание'); ?></div>
        <h2 class="mb-3"><?= Yii::t('hm', '<span class="text-wood">Цветовые</span> решения'); ?></h2>
    </div>
    <div class="position-relative d-lg-flex d-xxl-block">
        <div class="colors__tabs-modal mb-4 mb-lg-0 pr-3">
            <ul class="list-group content__ul content__ul-nav content__ul-colorsm text-right text-uppercase text-nowrap d-flex justify-content-between flex-lg-column justify-content-lg-start" role="tablist">
                <li><a href="#colors-m1" class="<?= Color::TYPE_STOCK === $active ?'active show': null; ?>" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Цвета в наличии'); ?>"><?= Yii::t('hm', '<span class="d-none d-lg-inline">Цвета </span>в наличии'); ?></a></li>
                <li><a href="#colors-m2" class="<?= Color::TYPE_RAL === $active ?'active show': null; ?>" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Окрашивание RAL'); ?>"><?= Yii::t('hm', '<span class="d-none d-lg-inline">Окрашивание </span>RAL'); ?></a></li>
                <li><a href="#colors-m3" class="<?= Color::TYPE_TEXTURE === $active ?'active show': null; ?>" data-toggle="tab" role="tab" title="<?= Yii::t('hm', 'Текстурное окрашивание'); ?>"><span class="d-none d-lg-inline"><?= Yii::t('hm', 'Текстурное окрашивание'); ?></span><span class="d-lg-none">Decoral</span></a></li>
            </ul>
        </div>
        <div class="tab-content colors__bg-modal position-relative">
            <?php foreach($models as $type => $colorss): ?>
                <div class="tab-pane fade<?= $type === $active ?' active show': null; ?>" id="colors-m<?= $type ?>" role="tabpanel">
                    <div class="colors__wrapper-modal position-relative _colors__thumbs" id="colors__thumbs<?= $type ?>">
                        <div class="colors__area-modal d-flex flex-wrap justify-content-start align-items-start align-content-start pr-3">
                            <?php foreach($colorss as $j=>$color): ?>
                                <div class="colors__thumb-modal">
                                    <img src="<?= $color->imageUrl; ?>" alt="<?= Yii::t('hm/color', $color->name); ?>" class="mb-1">
                                    <span><?= Yii::t('hm/color', $color->name); ?></span>
                                </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
$('.colors__thumb-modal').on('click', function(e) {
    var $img = $('<img class="colors__thumb-zoomin">').attr('src', $(this).find('img').attr('src'));
    $(this).closest('.tab-pane').block({
        message: $img, centerX: false, centerY: false, draggable: false, focusInput: false,
        overlayCSS: {opacity:0.9,backgroundColor:'#fff',cursor:'default'},
        css: {top: 0, left: 0, right: 0, bottom: 0, width: 0, height: 0, margin: 'auto', border: 0, backgroundColor: 'transparent', cursor: 'zoom-out'},
        /*onOverlayClick: function(e) {
            console.log($(this));
        },*/
    });
    $img.on('click', function(e) {
        $(this).closest('.tab-pane').unblock();
    });
});

$('._colors__thumbs').each(function(i, v) {
    var tabId = $(this).closest('.tab-pane').attr('id'),
        ps = new PerfectScrollbar('#'+$(this).attr('id'), {
        suppressScrollX: true,
        useBothWheelAxes: true,
    });

    // update PerfectScrollbar on show tab content
    $('a[href="#'+tabId+'"]').on('shown.bs.tab', function (e) {
        ps.update();
    });
});
</script>
