<?php

    use yii\helpers\Html;
    use yii\helpers\Url;
    use app\assets\AppCoreAsset;
    use app\components\widget\Alert;

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

    <link href="//fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

</head>

<body class="sidebar-xs">
<?php $this->beginBody() ?>
<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?= Url::home() ?>"><img src="assets/images/logo.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            <li><a class="sidebar-mobile-secondary-toggle"><i class="icon-more"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
            <li><a class="sidebar-control sidebar-secondary-hide hidden-xs"><i class="icon-transmission"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class=" icon-comments"></i>
                    <span class="visible-xs-inline-block position-right">Сообщения</span>
                    <span class="badge bg-warning-400">2</span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Сообщения
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">
                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/user/user1.png" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">1</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Евгений Кобыличенко</span>
                                    <span class="media-annotation pull-right">11:36</span>
                                </a>

                                <span class="text-muted">Добавил дефект по ПС Балей</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/user/user8.png" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">1</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Евгений Орлов</span>
                                    <span class="media-annotation pull-right">11:36</span>
                                </a>

                                <span class="text-muted">Необходимо подготовить отчет для ГИ. Срочно!</span>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="Все задачи"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class=" icon-task"></i>
                    <span class="visible-xs-inline-block position-right">Задачи</span>
                    <span class="badge bg-warning-400">1</span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Задачи
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">
                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/user/user1.png" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">1</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Алексей Сучков</span>
                                    <span class="media-annotation pull-right">14:58</span>
                                </a>

                                <span class="text-muted">Добавить дефекты по ПС Южная...</span>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="Все задачи"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/<?= Yii::$app->user->identity['img'] ?>" alt="">
                    <span><?= Yii::$app->user->identity['name'].' '.Yii::$app->user->identity['fname'] ?></span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> Профиль</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Настройки</a></li>
                    <li>
                    <?= Html::beginForm(['/site/logout'], 'post') ?>
                        <?= Html::a('<i class="icon-switch2"></i> Logout', Url::to(['site/logout']), [
                            'class' => 'js-action--form-submit'
                        ]) ?>
                    <?= Html::endForm() ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="active"><a href="<?= Url::home() ?>"><i class="icon-home4"></i> <span>Главная</span></a></li>
                            <li>
                                <a href="#"><i class="icon-server"></i> <span>Справочники</span></a>
                                <ul>
                                    <li><a href="layout_navbar_hideable.html">Сети</a></li>
                                    <li><a href="layout_navbar_hideable_sidebar.html">РЭС</a></li>
                                    <li><a href="layout_navbar_sidebar_fixed.html">Подстанции</a></li>
                                    <li><a href="layout_sidebar_fixed_native.html">Сотрудники</a></li>
                                    <li class="navigation-divider"></li>
                                    <li>
                                        <a href="layout_footer_fixed.html">Оборудование</a>
                                        <ul>
                                            <li><a href="">Номенклатура</a></li>
                                            <li><a href="">Дерево</a></li>
                                        </ul>
                                    </li>
                                    <li class="navigation-divider"></li>
                                    <li><a href="layout_navbar_fixed.html">Телесигналы</a></li>
                                </ul>
                            </li>

                            <!-- /page kits -->

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->

        <!-- Secondary sidebar -->
        <div class="sidebar sidebar-secondary sidebar-default">
            <div class="sidebar-content">

                <!-- Sidebar search -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Поиск</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <form action="." method="get">
                            <div class="has-feedback has-feedback-left">
                                <?= Html::input('search', 'search_string', Yii::$app->request->get('search_string'), [
                                    'class' => 'form-control js-action--submit-form-on-enter',
                                    'placeholder' => 'Поиск',
                                ])?>
                                <div class="form-control-feedback">
                                    <i class="icon-search4 text-size-base text-muted"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /sidebar search -->


                <!-- Sub navigation -->
                <div class="sidebar-category">
                    <div class="category-title">
                        <span>Фильтр</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <div class="category-content">
                        <div class="form-group">
                            <label>Тип дефекта:</label>

                            <select class="form-control">
                                <option>Все</option>
                                <option>Проблема</option>
                                <option>ТО</option>
                                <option>Задача</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <button type="reset" class="btn btn-icon btn-flat btn-xs text-warning-600">
                                    <i class="icon-cross2"></i>
                                </button>
                            </div>
                            <div class="col-xs-8 text-right">
                                <button type="submit" class="btn btn-info btn-labeled btn-xs">
                                    <b><i class="icon-filter3"></i></b>
                                    Применить
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /sub navigation -->

                <!-- Form sample -->
                <div class="sidebar-category category-collapsed">
                    <div class="category-title">
                        <span>Сообщение</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <form action="#" class="category-content">
                        <div class="form-group">
                            <label>Кому:</label>
                            <select class="form-control">
                                <option>Всем</option>
                                <option>Алексей Сучков</option>
                                <option>Максим Евдокимов</option>
                                <option>Евгений Кобыличенко</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Текст:</label>
                            <?= Html::textarea('msg_text', '', [
                                'rows' => 3,
                                'cols' => 3,
                                'class' => 'form-control',
                                'placeholder' => 'Сообщение'
                            ]) ?>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                <button type="reset" class="btn btn-icon btn-flat btn-xs text-warning-600">
                                    <i class="icon-cross2"></i>
                                </button>
                            </div>
                            <div class="col-xs-8 text-right">
                                <button type="submit" class="btn btn-info btn-labeled btn-xs">
                                    <b><i class="icon-envelop"></i></b>
                                    Отправить
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- /form sample -->
                <!-- Form sample -->
                <div class="sidebar-category category-collapsed">
                    <div class="category-title">
                        <span>Задача</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>

                    <form action="#" class="category-content">
                        <div class="form-group">
                            <label>Кому:</label>
                            <select class="form-control">
                                <option>Всем</option>
                                <option>Алексей Сучков</option>
                                <option>Максим Евдокимов</option>
                                <option>Евгений Кобыличенко</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Описание:</label>
                            <?= Html::textarea('task_text', '', [
                                'rows' => 3,
                                'cols' => 3,
                                'class' => 'form-control',
                                'placeholder' => 'Задача'
                            ]) ?>
                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                <button type="reset" class="btn btn-icon btn-flat btn-xs text-warning-600">
                                    <i class="icon-cross2"></i>
                                </button>
                            </div>
                            <div class="col-xs-8 text-right">
                                <button type="submit" class="btn btn-info btn-labeled btn-xs">
                                    <b><i class="icon-clipboard5"></i></b>
                                    Отправить
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- /form sample -->

            </div>
        </div>
        <!-- /secondary sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="<?= Url::home() ?>"><i class="icon-home2 position-left"></i> Главная</a></li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li><a href="#"><i class=" icon-plus3 position-left"></i> Дефект</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-statistics position-left"></i>
                                Отчеты
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">Повторяющиеся дефекты</a></li>
                                <li><a href="#">По оборудованию</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Отчет для ГИ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <?= Alert::widget();?>

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

