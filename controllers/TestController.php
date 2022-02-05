<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
   public $defaultAction = 'my-test';

   public function actions()
   {
      return [
         // объявляет "error" действие с помощью названия класса
         'test' => 'app\components\HelloAction',

      ];
   }

   public function actionIndex($name = 'Guest', $age = null)
   {
      // return $this->renderFile('@app/views/test/index.php');
      // return $this->renderPartial('index');
      // return $this->renderAjax('index');
      return $this->render('index', [
         'name' => $name,
         'age' => $age
      ]);
      return $this->render('index', compact('name', 'age'));
   }

   public function actionMyTest()
   {
      return __METHOD__;
      // return 222;
   }
}