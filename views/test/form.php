<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

?>
<div class="col-md-12">
   <h2>Страница с формой</h2>

   <?php Pjax::begin([
      // Опции Pjax
   ]); ?>

   <?php if (Yii::$app->session->hasFlash('success')) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         <?= Yii::$app->session->getFlash('success') ?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
   <?php } ?>


   <?php $form = ActiveForm::begin([
      'id' => 'my-form',
      // 'enableClientValidation' => false,
      'options' => [
         'class' => 'form-horizontal',
         // 'data' => ['pjax' => true],
         'data-pjax' => true,
      ],
      'fieldConfig' => [
         'template' => "{label} \n <div class='col-md-5'>{input} \n {hint} \n {error}</div>",
         'labelOptions' => ['class' => 'col-md-2 control-label'],
      ]
   ]) ?>

   <?= $form->field($model, 'name', [
      'inputOptions' => [
         'placeholder' => 'test placeholder',
      ],
   ])->hint('Enter Your Name') ?>
   <?= $form->field($model, 'email')->input('email', ['placeholder' => "Enter Your Email"]) ?>
   <?= $form->field($model, 'text', [
      'template' => "<div class='col-md-5'>{input} \n {hint} \n {error}</div>",
   ])->textarea(['rows' => 5]) ?>

   <div class="form-group">
      <div class='col-md-5'>
         <?= Html::submitButton('submit', ['class' => 'btn btn-success']) ?>
      </div>
   </div>


   <?php ActiveForm::end() ?>
   <?php Pjax::end(); ?>
</div>