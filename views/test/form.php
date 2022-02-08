<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>
<div class="col-md-12">
   <h2>Страница с формой</h2>

   <?php $form = ActiveForm::begin([
      'id' => 'my-form',
      'options' => [
         'class' => 'form-horizontal',
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
</div>