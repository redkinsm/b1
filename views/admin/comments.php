<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use \yii\grid\GridView;
use app\assets\Comments\AdminAsset;

$this->title = 'Comments list';
$this->params['breadcrumbs'][] = $this->title;

AdminAsset::register($this);
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <div id="new-comment" class="alert alert-success" role="alert" style="display: none;">
        <h4 class="alert-heading">New comment!</h4>
        <p>Please, update page</p>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    [
                        'class' => 'yii\grid\ActionColumn',

                        'options' => ['style' => 'width:70px;'],
                        'template' => '{update} {delete}',
                    ],
                    [
                        'attribute' => 'id',
                    ],
                    [
                        'attribute' => 'date',
                    ],
                    [
                        'attribute' => 'name',
                        'label' => 'Name',
                    ],
                    [
                        'attribute' => 'comment',
                        'label' => 'Comment',
                        'value' => function ($model) {
                            return substr($model->comment,0, 100).(strlen($model->comment)>100?'...':'');
                        } ,
                        'format' => 'raw',
                    ],
                ]]); ?>
        </div>
    </div>
</div>