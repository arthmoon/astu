<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\web\View;

$this->title = 'Дефекты | Главная страница';

$this->registerJsFile('assets/js/core/app.js', [
    'position' => \yii\web\View::POS_HEAD,
    'depends' => \app\assets\AppCoreAsset::className()
]);

$this->registerJsFile('assets/js/script.js', [
    'position' => \yii\web\View::POS_HEAD,
    'depends' => \app\assets\AppCoreAsset::className()
]);

?>

