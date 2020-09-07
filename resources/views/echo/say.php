<?php

use Yiisoft\Form\Widget\Field;
use Yiisoft\Form\Widget\Form;
use Yiisoft\Html\Html;

/* @var \App\Form\EchoForm $form */
/* @var string $csrf */
/* @var \Yiisoft\Router\UrlGeneratorInterface $url */
?>


<?php if (!empty($form->getMessage())): ?>
<div class="notification is-success">
    The message is: <?= Html::encode($form->getMessage()) ?>
</div>
<?php endif ?>

<?= Form::begin()->action($url->generate('echo/say'))->start() ?>

<?= Html::hiddenInput('_csrf', $csrf) ?>

<?= Field::widget()->config($form, 'message') ?>

<?= Html::submitButton('Say') ?>

<?= Form::end() ?>