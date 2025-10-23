<?php

/* @var $this yii\web\View */
?>
<?php $this->beginContent($this->context->viewPath . '/_feedback.php'); ?>
<h3 class="mb-5 text-uppercase text-center text-nowrap"><?= $title ?></h3>
<div class="text-center"><?= $message ?></div>
<?php $this->endContent(); ?>

<?php if ($goal): ?>
<script>
if (typeof yaCounter35277685 !== 'undefined') {
    yaCounter35277685.reachGoal('LEAD');
}
</script>
<?php endif; ?>
