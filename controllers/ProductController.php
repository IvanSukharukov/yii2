<?php


namespace app\controllers;


use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Product';
        $products = Product::find()->all();

        return $this->render('index', ['products' => $products]);
    }

    public function actionView($id = '')
    {
        $product = Product::findOne($id);
        $this->view->title = "Poduct: {$product->title}";

        if(!$product){
            throw new NotFoundHttpException('Product not found');
        }

        return $this->render('view', ['product' => $product]);
    }
}