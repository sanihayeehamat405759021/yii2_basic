<?php

namespace app\controllers;

class HelloController extends \yii\web\Controller{

	public function actionIndex(){
return $this->render('index',['firstname'=>'ซานี',
	'lastname'=>'หะยีฮามะ'
	'weigth'=>$weigth

	]);
	}

}
public function actionProfile(){
	return $this->render('profile');
}

?>