<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="col-md-12">
   <h2>Страница с формой</h2>

   <?php $form = ActiveForm::begin() ?>
   <?= $form->field($model, 'name') ?>
   <?= $form->field($model, 'email')->radio() ?>
   <?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>

   <div class="form-group">
      <?= Html::submitButton('submit', ['class' => 'btn btn-success']) ?>
   </div>

   <?php ActiveForm::end() ?>
</div>