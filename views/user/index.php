<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';

$this->registerJsFile('assets/js/core/app.js', [
    'position' => \yii\web\View::POS_HEAD,
    'depends' => \app\assets\AppCoreAsset::className()
]);

$this->registerJsFile('assets/js/script.js', [
    'position' => \yii\web\View::POS_HEAD,
    'depends' => \app\assets\AppCoreAsset::className()
]);

?>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Пользователи</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => '<div class="panel-body">{summary}</div>{items}{pager}',
            'tableOptions' => [
                    'class' => 'table table-sm'
            ],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'username',
                //'auth_key',
                //'password_hash',
                //'password_reset_token',
                'email:email',
                //'status',
                //'created_at',
                //'updated_at',
                'name',
                'fname',
                'img',
                'rank',
                'role',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
    <?php Pjax::end(); ?>
