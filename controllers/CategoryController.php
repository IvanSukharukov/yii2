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

    public function actionView($alias = null)
    {
        $category = Category::findOne(['alias' => $alias]);
        $this->view->title = "Category: {$category->title}";

        if(!$category){
            throw new NotFoundHttpException('Category not found');
        }
        $products = $category->getProducts(850)->all();

        return $this->render('view', ['category' => $category, 'products' => $products]);
    }
}