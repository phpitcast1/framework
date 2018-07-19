<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
	public function actionAdd()
	{
		echo 6666;
	}

    //脚下留心：方法前面必须action
    public function actionIndex()
    {
    	echo Yii::$app->request->baseUrl;
        echo 222;
    }
}
