<?php
/**
 * 留言模块/功能
 * @author phpopenfather
 */
class MsgController extends BaseController 
{
	//添加
	public function addAction()
	{
		#1.是否post提交
		if ($this->getRequest()->isPost()) {
			#2.接受数据
			$uname = $this->getRequest()->getPost('uname');
			$content = $this->getRequest()->getPost('content');
			$time = time();
			#3.入库
			$rs = (new MsgModel)->add("insert into msg values (null, '$uname', '$content', $time, $time)");
			#4.判断
			if ($rs) {
				$this->success('/msg/index', '好棒成功');
			} else {
				$this->error('/msg/index', '你不行插入失败');
			}
		}
	}

	//列表
	public function indexAction() 
	{
		#1.获取留言数据
		$msgs = (new MsgModel)->get("select * from msg");
		#2.传递给试图
		$this->getView()->assign('msgs', $msgs);
		#3.加载视图
		echo $this->getView()->render('msg/index.phtml');
		return false;
	}
}
