<?php

use app\assets\AppAsset;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
   <meta charset="<?= Yii::$app->charset ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php $this->registerCsrfMetaTags() ?>
   <title><?= Html::encode($this->title) ?> - test-layout</title>
   <?php $this->head() ?>
</head>

<body>
   <?php $this->beginBody() ?>
   <div class="container">
      <div class="row">
         <?= $content ?>
      </div>
   </div>
   <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>