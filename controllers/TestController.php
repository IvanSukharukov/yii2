<?php

namespace app\controllers;

use app\models\Country;
use app\models\EntryForm;
use Yii;
use yii\bootstrap4\ActiveForm;
use yii\web\Controller;
use yii\web\Response;
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

    public function actionForm()
    {
        $this->view->title = 'test page';
        $this->layout = 'test-layout';

        $model = new EntryForm();

        $model->load(Yii::$app->request->post());
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($model->validate()){
                return ['message' => 'ok'];
            } else {
                return ActiveForm::validate($model);
            }
//            return ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('success', 'saved successfully - standart');
            return $this->refresh();
        }

        return $this->render('form', [
            'model' => $model,
        ]);
    }

    public function actionView()
    {
        $status = 1;
//        $countries = Country::find()->where()->all();
//        $countries = Country::find()->where("population < 1000000000 AND code <> 'AU'")->all();
//        $countries = Country::find()->where('status=:status', [':status' => $status])->all();

//        $countries = Country::find()->where("population < :population AND code <> :code", [':population' => 100000000, ':code' => 'AU'])->all();

/*        $countries = Country::find()->where([
            'code' => ['DE', 'FR', 'GB'],
            'status' => 1
        ])->all();*/
//        $countries = Country::find()->orderBy('population DESC')->all();

/*        $countries = Country::find()->count();
        debug($countries, 1);*/

//        $countries = Country::find()->limit(1)->where(['code' => 'CN'])->one();

//        $countries = Country::findAll(['DE', 'FR', 'GB']);

//        $countries = Country::findOne('BR');

        $countries = Country::find(['DE', 'FR', 'GB'])->asArray()->all();
        return $this->render('view', ['countries' => $countries]);
    }
}
