<?php

/* @var $this yii\web\View */
?>
<div class="modal__content modal__content-catalog align-self-md-center d-flex flex-column cat_reika">
    <div class="cat__title d-none d-md-block">
        <h4 class="text-uppercase"><strong><?= Yii::t('hm', 'типы ламелей'); ?></strong></h4>
    </div>
    <?= $this->render('_catalog', compact('models')); ?>
</div>
