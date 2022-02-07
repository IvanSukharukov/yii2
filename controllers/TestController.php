<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
   public $defaultAction = 'my-test';
   public $myVar;

   public function actions()
   {
      return [
         // объявляет "error" действие с помощью названия класса
         'test' => 'app\components\HelloAction',

      ];
   }

   public function actionIndex($name = 'Guest', $age = null)
   {
      $this->myVar = 'my variable';
      // debug(\Yii::$app);
      \Yii::$app->view->params['t1'] = 't1 params';
      return $this->render('index', [
         'name' => $name,
         'age' => $age,
         // 'myVar' => $this->myVar,
      ]);
      // return $this->render('index', compact('name', 'age'));
   }

   public function actionMyTest()
   {
      return __METHOD__;
      // return 222;
   }
}
