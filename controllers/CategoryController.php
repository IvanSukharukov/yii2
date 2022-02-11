<?php


namespace app\controllers;


use app\models\Category;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Categories';
        $categories = Category::find()->all();

        return $this->render('index', ['categories' => $categories]);
    }

    public function actionView($id = null)
    {
        $category = Category::findOne($id);
        $this->view->title = "Category: {$category->title}";

        if(!$category){
            throw new NotFoundHttpException('Category not found');
        }

        return $this->render('view', ['category' => $category]);
    }
}