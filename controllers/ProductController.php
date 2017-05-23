<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$model = Product::find()->all();
    	//SELECT *FROM product;

        return $this->render('index',[
        	'model'=>$modelProduct,
        	]);
    }

}
