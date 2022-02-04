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

   public function actionIndex($name, $age = null)
   {
      return 'hello, ' . $name;
      // return 222;
   }

   public function actionMyTest()
   {
      return __METHOD__;
      // return 222;
   }
}