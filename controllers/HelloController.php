<?php

namespace app\controllers;

class HelloController extends \yii\web\Controller{

	public function actionIndex(){
		$weigth = 40;
	return $this->render('index',[
		'firstname'=>'ซานี',
		'lastname'=>'หะยีฮามะ',
		'weigth'=>$weigth

		]
	);
}

public function actionProfile(){
	return $this->render('profile');
}
public function
actionProfile($id,$brand=null){
	
}
}
?>