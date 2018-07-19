<?php
/**
 * @name IndexController
 * @author desktop-hovq57j\abc
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf_Controller_Abstract 
{
	public function indexAction() 
	{

		$t4 = new T4Model;

		$rs = $t4->add("insert into t4 values (null, 'aaa', 'b')");
		var_dump($rs);

		$t4s = $t4->get('select * from t4');
		
		echo "<pre>";
		print_r($t4s);die;

		$data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];

		$this->getView()->assign('data1', $data1);
		$this->getView()->assign('data2', $data2);
		$this->getView()->assign('data3', $data3);
		echo $this->getView()->render('test.phtml');
		//在yaf框架控制器方法中
		//return true - 默认加载视图，false - 不加载
		//在yaf框架中视图文件名：phtml  寓意 php html文件
		return false;
	}
}
