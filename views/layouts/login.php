<?php

use yii\helpers\Html;
use app\assets\AppLoginAsset;
use yii\widgets\ActiveForm;
use app\models\LoginForm;
use yii\helpers\Url;

AppLoginAsset::register($this);

$LoginForm = new LoginForm();
if ($LoginForm->load(Yii::$app->request->post()) && $LoginForm->login()) {
    return $this->goBack();
}
$LoginForm->password = '';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <base href="/"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

</head>

<body>
<?php $this->beginBody() ?>
<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?= Url::home() ?>"><img src="assets/images/logo.png" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="<?= Url::home() ?>">
                    <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Главная</span>
                </a>
            </li>

            <li>
                <a href="<?= Url::to(['site/contact']) ?>">
                    <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Написать администратору</span>
                </a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <span class="visible-xs-inline-block position-right"> Настройки</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

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
                        <?= $form->field($LoginForm, 'password')->passwordInput() ?>
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

                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2018. <a href="http://www.mrsk-sib.ru/index.php?lang=ru75">Филиал ПАО МРСК Сибири "Читаэнерго"</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

