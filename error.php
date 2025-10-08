<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error text-center">
    <div><i class="fa fa-meh-o fa18x text-muted"></i></div>
    <h1><?= Html::encode($this->title) ?></h1>
    <h2><?= Html::encode($message) ?></h2>
</div>
