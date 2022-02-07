<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\View;

class TestController extends Controller
{
   // public $defaultAction = 'my-test';
   public $myVar;
   public $layout;

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
      $this->layout = 'test-layout';
      // debug(\Yii::$app);
      \Yii::$app->view->params['t1'] = 't1 params';

      $this->view->title = 'title page (contoller)';
      $this->view->registerMetaTag([
         'name' => 'description',
         'content' => 'test description - index page',
      ], 'description');

      \Yii::$app->view->on(View::EVENT_END_BODY, function () {
         echo date('Y-m-d');
      });

      return $this->render('index', [
         'name' => $name,
         'age' => $age,
         // 'myVar' => $this->myVar,
      ]);
      // return $this->render('index', compact('name', 'age'));
   }

   public function actionMyTest()
   {

      return $this->render('my-test');
   }
}
