<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Дефекты | Обращение в техническую поддержку';
?>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel registration-form">
            <div class="panel-body">
                <div class="text-justify">
                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                        <div class="alert alert-success">
                            Ваше обращение зарегистрировано.
                        </div>

                        <p>
                            Специалист технической поддержки свяжется с Вами в ближайшее время
                            <?php if (Yii::$app->mailer->useFileTransport): ?>
                                Поскольку приложение навходится в режиме разработки, письмо не было отправлено.<br/>
                                Файл с текстом письма находится:<br/>
                                <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                Настройте свойство <code>useFileTransport</code> модуля <code>mail</code>
                                для отправки email сообщений.
                            <?php endif; ?>
                        </p>

                    <?php else: ?>

                        <h4>Обращение в службу технической поддержки</h4>

                        <?php $form = ActiveForm::begin([
                            'id' => 'contact-form',
                            'fieldConfig' => [
                                'template' => "{label}{input}<small>{error}</small>",
                            ],
                        ]); ?>

                        <div class="form-group">
                            <?= $form->field($model, 'name')->textInput([
                                'autofocus' => true,
                                'class' => 'form-control'
                            ]) ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'email')->input('email', [
                                'class' => 'form-control'
                            ]) ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'subject')->textInput([
                                'class' => 'form-control'
                            ]) ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'body')->textarea([
                                'rows' => 6,
                                'class' => 'form-control'
                            ]) ?>
                        </div>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-contact">


</div>
