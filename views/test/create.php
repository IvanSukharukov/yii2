<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

?>
<div class="col-md-12">
    <h1><?= $this->title ?></h1>

    <?php if (Yii::$app->session->hasFlash('success')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= Yii::$app->session->getFlash('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <?php if (Yii::$app->session->hasFlash('error')) { ?>
        <div class="alert alert-danger alert-error fade show" role="alert">
            <?= Yii::$app->session->getFlash('error') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>



    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'form-horizontal',
        ],
        'fieldConfig' => [
            'template' => "{label} \n <div class='col-md-5'>{input} \n {hint} \n {error}</div>",
            'labelOptions' => ['class' => 'col-md-2 control-label'],
        ]
    ]) ?>

        <?= $form->field($country, 'code', ['enableAjaxValidation' => true]) ?>
        <?= $form->field($country, 'name') ?>
        <?= $form->field($country, 'population') ?>
        <?= $form->field($country, 'status')->checkbox() ?>

        <div class="form-group">
            <div class='col-md-5'>
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    <?php ActiveForm::end() ?>
</div>