<?php

use yii\helpers\Html;
use frontend\assets\FrontendAsset;

/* @var $this \yii\web\View */
/* @var $content string */

FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="<?= Yii::$app->language; ?>" class="ie8 no_js"> <![endif]-->
<!--[if IE 9]> <html lang="<?= Yii::$app->language; ?>" class="ie9 no_js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language; ?>" class="no_js">
<!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Himmel">
    <meta name="keywords" content="Himmel">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className.replace('no_js', 'js');
        var rawScale = 1;
        if (window.screen.width < window.screen.height) { // Portrait
            rawScale = Math.floor(100 * window.innerWidth / 480) / 100;
        } else {
            rawScale = Math.floor(100 * window.innerHeight / 576) / 100;
        }
        var screenScale = rawScale < 1 ? rawScale : 1;
        document.querySelector('meta[name="viewport"]').setAttribute('content', 'width=device-width, initial-scale=' + screenScale + ', user-scalable=no');
    </script>
    <?= !YII_DEBUG ? Yii::$app->counters->head : null; ?>
	<meta name="yandex-verification" content="acb772b809359a59" />
</head>
<body class="<?= Yii::$app->devicer->isMobile() ? 'device_mobile' : null; ?>">
<?= !YII_DEBUG ? Yii::$app->counters->top : null; ?>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
<?= !YII_DEBUG ? Yii::$app->counters->bottom : null; ?>

<script>
	function sendOrder() {
		//alert('Ваше обращение успешно доставлено!');
		//fbq('init', '371678033555115');
		fbq('track', 'SubmitApplication');
	}
</script>
<!-- Callibri -->
<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>
<?php $this->endPage() ?>