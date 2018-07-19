<?php
namespace frontend\controllers;

use Yii;
use common\models\Msg;
use yii\web\Controller;

/**
 * 留言模块
 * @author 于洋
 */
class MsgController extends Controller
{
    //去除头尾
    public $layout = false;

    //关闭csrf攻击
    public $enableCsrfValidation = false;

    //列表
	public function actionIndex()
	{
        #1.获取所有留言数据
        $msgs = Msg::find()->all();
        #2.加载视图并传递数据
        return $this->render('index', [
            'msgs' => $msgs
        ]);
	}

    //添加
    public function actionAdd()
    {
        #1.判断是否POST提交
        if (Yii::$app->request->isPost) {
            #2.接受数据
            $uname = Yii::$app->request->post('uname');
            $content= Yii::$app->request->post('content');
            #3.入库
            $msg = new Msg;
            $msg->uname = $uname;
            $msg->content = $content;
            $msg->created_at = $msg->updated_at = time();
            $rs = $msg->save();
            #4.判断跳转
            if ($rs) {
                return $this->redirect(['/msg']);
            } else {
                return $this->redirect(['/msg']);
            }
        }
    }
}
