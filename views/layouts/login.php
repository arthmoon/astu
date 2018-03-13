<?php

use yii\helpers\Html;
use app\assets\AppCoreAsset;
use yii\helpers\Url;

AppCoreAsset::register($this);

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
                <a href="<?= Url::to(['site/about']) ?>">
                    <i class="icon-help"></i> <span class="visible-xs-inline-block position-right"> О проекте</span>
                </a>
            </li>

            <li>
                <a href="<?= Url::to(['site/contact']) ?>">
                    <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Написать администратору</span>
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

                <?= $content ?>

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

