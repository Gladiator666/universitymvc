<?php

class UserController extends Controller
{
	public function actionIndex()
	{
        $array = array(3,4); 
        $a = AdminUsers::model()->findAllByPk($array);
        foreach($a as $one){
            echo $one->namefirst;
            echo '<hr />';
        }    
        
        echo $a->namefirst;
        //$a = AdminUsers::model()->findByPk(3);
		//$this->render('index');
        //$this->Add();
	}
    public function Add() {
        
        /*$model = new AdminUsers();
        $model->namefirst = "Admin_users";
        $model->email = "sdfsdf@mail.ru";
        $model->save();*/
        
        
    }
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}