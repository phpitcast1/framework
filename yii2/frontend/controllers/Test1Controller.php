<?php
namespace frontend\controllers;

use Yii;
use common\models\T1;
use yii\web\Controller;

class Test1Controller extends Controller
{
     public $layout = false;

	public function actionAdd()
	{
	}

    //脚下留心：方法前面必须action
    public function actionIndex()
    {
        $t1 = new T1;
        $t1->uname = str_shuffle('asdfasdfasdfs');
        $t1->save();


        $t1s = T1::find()->all();
        foreach ($t1s as $key => $t1) {
                echo $t1->uname . '<br />';
        // echo '<pre>';
        // print_r($t1);die;
        }

        die;
        //echo 666;
        //die;
        //加载veiws目录下的test目录下的index.php文件
        return $this->render('index', [
            'username' => '苍苍',
            'orders' => [
                'a' => '啪啪啪',
                'b' => '哒哒哒'
            ],
        ]); 
    }
}
