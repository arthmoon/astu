<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\LoginForm;

$this->title = 'Дефекты | Авторизация';

$this->registerJsFile('assets/js/core/app.js', [
    'position' => \yii\web\View::POS_HEAD,
    'depends' => \app\assets\AppCoreAsset::className()
]);

$LoginForm = new LoginForm();
if ($LoginForm->load(Yii::$app->request->post()) && $LoginForm->login()) {
    return $this->goBack();
}
$LoginForm->password = '';
?>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'fieldConfig' => [
        'template' => "{input}",
    ],
]); ?>

    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Вход в систему<small class="display-block">Введите логин и пароль</small></h5>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <?= $form->field($LoginForm, 'username')->textInput([
                'autofocus' => true,
                'class' => 'form-control',
                'placeholder' => 'Username'
            ]) ?>
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <?= $form->field($LoginForm, 'password')->passwordInput([
                'placeholder' => 'Password',
            ]) ?>
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Login <i class="icon-circle-right2 position-right"></i>', [
                'class' => 'btn btn-primary btn-block',
                'name' => 'login-button'
            ]) ?>
        </div>

        <div class="text-center">
            <a href="login_password_recover.html">Забыли пароль?</a>
        </div>
    </div>


<?php ActiveForm::end(); ?>