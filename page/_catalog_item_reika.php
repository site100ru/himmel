<?php

use yii\helpers\ArrayHelper;
use common\models\ReikaFile;

/* @var $this yii\web\View */
?>
<div class="swiper-slide preview__item s<?= ArrayHelper::getValue($model, 'order'); ?>">
    <div class="item__wrapper">
        <div class="swiper-lazy item__param item__param-img d-none d-md-block" data-background="<?= ArrayHelper::getValue($model->imageUrls, ReikaFile::TYPE_PREVIEW); ?>"></div>
        <div class="swiper-lazy item__param item__param-img d-block d-md-none" data-background="<?= ArrayHelper::getValue($model->imageUrls, ReikaFile::TYPE_PREVIEW_SM); ?>"></div>
        <div class="item__content bg-wood">
            <div class="item__param item__param-num"><strong><?= str_pad(ArrayHelper::getValue($model, 'order'), 2, '0', STR_PAD_LEFT); ?>.</strong></div>
            <div class="item__param item__param-art">
                <h5 class="mb-3"><?= Yii::t('hm', 'АРТ'); ?>: <?= ArrayHelper::getValue($model, 'art'); ?></h5>
                <ul class="item__param-list text-left">
                    <li><?= Yii::t('hm', 'Длина'); ?>: <span class="item-length"><?= Yii::t('hm', 'до'); ?>&nbsp;<?= ArrayHelper::getValue($model, 'length'); ?></span>&nbsp;<?= Yii::t('hm', 'мм'); ?></li>
                    <li><?= Yii::t('hm', 'Ширина'); ?>: <span class="item-width"><?= ArrayHelper::getValue($model, 'width'); ?></span>&nbsp;<?= Yii::t('hm', 'мм'); ?></li>
                    <li><?= Yii::t('hm', 'Высота'); ?>: <span class="item-weight"><?= ArrayHelper::getValue($model, 'height'); ?></span>&nbsp;<?= Yii::t('hm', 'мм'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
