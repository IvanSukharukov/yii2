<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
   public $defaultAction = 'my-test';

   public function actionIndex()
   {
      return $this->render('index');
      // return 222;
   }

   public function actionMyTest()
   {
      return __METHOD__;
      // return 222;
   }
}