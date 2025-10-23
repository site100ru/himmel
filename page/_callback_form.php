<?php

//use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\bootstrap4\Dropdown;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
?>
<?php $this->beginContent($this->context->viewPath . '/_feedback.php') ?>
<h3 class="mb-2 text-uppercase text-wood"><?= Yii::t('hm', 'Есть вопросы?'); ?></h3>
<h4 class="mb-5 text-uppercase"><?= Yii::t('hm', 'Перезвоним в ближайшее время!'); ?></h4>
<?php $form = ActiveForm::begin([
    'id' => 'grid__form-create',
    'options' => ['csrf' => false, 'class' => $formClass, 'onsubmit' => 'sendOrder();'],
    'enableAjaxValidation' => false,
    'enableClientValidation' => false,
    'validateOnBlur' => false,
    'validateOnChange' => false,
    'validateOnType' => false,
    'validateOnSubmit' => false,
]);
$ccItems = array_map(function($v) { return ['label' => '<span class="flag-icon flag-icon-'.ArrayHelper::getValue($v, 'cc').'"></span> '.ArrayHelper::getValue($v, 'name'), 'encode' => false, 'url' => '#', 'linkOptions' => ['data' => ['mask' => ArrayHelper::getValue($v, 'mask'), 'cc' => ArrayHelper::getValue($v, 'cc')]]]; }, ArrayHelper::getValue(Yii::$app->params, 'countryCode'));
$ccMenu = Dropdown::widget([
    'items' => ArrayHelper::merge($ccItems, [
        '-',
        ['label' => '<span class="flag-icon flag-icon-xx"></span> Произвольный номер', 'encode' => false, 'url' => '#', 'linkOptions' => ['data' => ['cc' => 'xx', 'mask' => '\+9999999999[99]']]],
    ]),
    'options' => ['class' => '_cc dropdown-menu-right'],
]);
//$dd = '<div class="dropdown"><a class="feedback__country d-inline-block float-right font-italic dropdown-toggle" href="#" role="button" id="country" data-toggle="dropdown">Россия</a>'.$ccMenu.'</div>';
$dd = '<div class="input-group-prepend"><button class="btn btn-flag pr-0 dropdown-toggle" type="button" data-toggle="dropdown"><span id="flag" class="flag-icon flag-icon-'.$cc.'" title="'.ArrayHelper::getValue(Yii::$app->params, ['countryCode', $cc, 'name']).'"></span></button>'.$ccMenu.'</div>';
?>
<div class="model-fields mb-5">
    <?php //= $form->field($model, 'phone', ['template' => "{label}\n{input}".$dd."\n{hint}\n{error}", 'options' => ['class' => 'form-group label-floating'.(empty($model->phone)?' is_empty':'')]])->textInput(['maxlength' => true, 'class' => 'form-control _phonemask', 'tabindex' => 3, 'data-country' => Yii::$app->sxgeo->get('country', '92.62.78.227')]); ?>
    <?= $form->field($model, 'phone', ['template' => "{label}\n".'<div class="input-group">'."\n{input}".$dd.'</div>'."\n{hint}\n{error}", 'options' => ['class' => 'form-group label-floating'.(empty($model->phone)?' is_empty':'')]])->textInput(['maxlength' => true, 'class' => 'form-control _phonemask', 'tabindex' => 3, 'data-mask' => ArrayHelper::getValue(Yii::$app->params, ['countryCode', $cc, 'mask'])]); ?>
    <?= Html::activeHiddenInput($model, 'cc', ['value' => $cc]); ?>
    <?= Html::activeHiddenInput($model, 'tz', ['value' => null]); ?>
</div>
<div class="text-center">
<?= Html::submitButton($btn.'<span class="btn__icon"><svg><use xlink:href="#ico__arrow-1-w"></use></svg></span>', ['class' => 'btn btn__base btn__base-light pl-5']); ?>
</div>
<?php ActiveForm::end(); ?>

<script>
var offset = 0 - (new Date().getTimezoneOffset()/60) - 7;
$('input[name="ContactForm[tz]"]').first().val((offset <= 0 ?'':'+') + offset);
    
$('._phonemask').each(function() {
    $(this).inputmask({
        mask: $(this).data('mask'),
        removeMaskOnSubmit: false,
        showMaskOnHover: false,
        showMaskOnFocus: true,
        //clearMaskOnLostFocus: false,
        onKeyValidation: function(key, result) {
            if ($(this).inputmask('isComplete')) {
                this.setCustomValidity('');
            } else {
                this.setCustomValidity("<?= Yii::t('hm', 'Укажите телефон'); ?>");
            }
        }
    });
});
/*$('._phonemask').inputmask({
    //mask: '+7 (999) 999-9999',
    removeMaskOnSubmit: false,
    showMaskOnHover: false,
    showMaskOnFocus: true,
    //clearMaskOnLostFocus: false,
    onKeyValidation: function(key, result) {
        if ($(this).inputmask('isComplete')) {
            this.setCustomValidity('');
        } else {
            this.setCustomValidity("<?= Yii::t('hm', 'Укажите телефон'); ?>");
        }
    }
});*/
$('._cc > .dropdown-item').on('click', function(e) {
    var $mask = $('._phonemask');
    $mask.inputmask('setvalue', null);
    $mask.inputmask('option', {mask: $(this).data('mask')});
    $mask.focus();
    //$('#country').text($(this).data('name'));
    //$('#country').text($(this).text());
    $('input[name="ContactForm[cc]"]').first().val($(this).data('cc'));
    $('#flag').attr('title', $(this).text()).removeClass(function (index, className) { return (className.match (/(^|\s)flag-icon-\S{2}/g) || []).join(' '); }).addClass('flag-icon-'+$(this).data('cc'));
});

$('.label-floating input').on('focusin', function(e) {
    $(this).closest('.label-floating').removeClass('is_empty');
});
$('.label-floating input').on('focusout', function(e) {
    if (!$(this).val().length) {
        $(this).closest('.label-floating').addClass('is_empty');
    }
});
</script>
<?php $this->endContent(); ?>