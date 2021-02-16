<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Comments */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\Comments\ClientAsset;

$this->title = 'Comment';
$this->params['breadcrumbs'][] = $this->title;

ClientAsset::register($this);
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('commentFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for comment!
        </div>

    <?php else: ?>

        <p>
            Please, input your comment:
        </p>

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
    <?php endif; ?>
</div>