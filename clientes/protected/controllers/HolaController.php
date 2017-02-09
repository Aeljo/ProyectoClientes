<?php
#http://localhost/Yii/clientes/hola/index	
class HolaController extends Controller
{
	public function actionIndex()
	{
		$model=CActiveRecord::model("Users")->findAll();
		$twitter="@AlejandroRojas";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
}   