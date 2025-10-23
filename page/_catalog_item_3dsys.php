<?php

use yii\helpers\ArrayHelper;
use common\models\Sys3d;
use common\models\Sys3dFile;

/* @var $this yii\web\View */
?>
<div class="swiper-slide preview__item s<?= ArrayHelper::getValue($model, 'order'); ?>">
    <div class="item__wrapper">
        <div class="swiper-lazy item__param item__param-img" data-background="<?= ArrayHelper::getValue($model->imageUrls, Sys3dFile::TYPE_PREVIEW); ?>" style="background-position: <?= Sys3d::IMGPOS_RIGHT === ArrayHelper::getValue($model, 'imgpos') ? 'right' : 'left'; ?> 0"></div>
        <div class="item__content bg-wood">
            <div class="item__param item__param-num"><strong><?= str_pad(ArrayHelper::getValue($model, 'order'), 2, '0', STR_PAD_LEFT); ?>.</strong></div>
            <div class="item__param item__param-art">
                <h5 class="mb-3"><?= Yii::t('hm', 'АРТ'); ?>: <?= ArrayHelper::getValue($model, 'art'); ?></h5>
                <ul class="item__param-list text-left">
                    <li><?= Yii::t('hm', 'Длина сторон'); ?>: <span class="item-length"><?= ArrayHelper::getValue($model, 'length'); ?></span>&nbsp;<?= Yii::t('hm', 'мм'); ?></li>
                    <li><?= Yii::t('hm', 'Ширина основания'); ?>: <span class="item-width"><?= ArrayHelper::getValue($model, 'width'); ?></span>&nbsp;<?= Yii::t('hm', 'мм'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
