<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Comments list', 'url' => ['comments']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="holdings-view well">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('updated')): ?>

    <div class="alert alert-success">
        Updated!
    </div>
    <?php endif;?>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'comment-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'comment-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
