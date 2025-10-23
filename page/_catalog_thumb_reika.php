<?php

use yii\helpers\ArrayHelper;
use common\models\ReikaFile;

/* @var $this yii\web\View */
?>
<a href="#" class="cat__thumb d-block<?= !$i?' active':null; ?>" title="<?= ArrayHelper::getValue($model, 'art'); ?>">
    <div class="thumb__param thumb__param-num"><?= str_pad(1+$i, 2, '0', STR_PAD_LEFT); ?>.</div>
    <div class="thumb__param thumb__param-img"><img src="<?= ArrayHelper::getValue($model->imageUrls, ReikaFile::TYPE_THUMB); ?>" alt="<?= ArrayHelper::getValue($model, 'art'); ?>"></div>
    <div class="thumb__param thumb__param-art"><?= Yii::t('hm', 'Арт'); ?>: <?= ArrayHelper::getValue($model, 'art'); ?></div>
    <div class="thumb__param thumb__param-arr mr-3 mb-3"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></div>
</a>
