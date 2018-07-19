<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{
	public function index()
	{
		#步骤1：加载指定模型
		$this->load->model('t3');

		$rs = $this->t3->add([
			'uname' => str_shuffle('asdfadsf'),
			'pwd' => str_shuffle('asdfadsf'),
		]);
		var_dump($rs);


		#步骤2：调用
		$t3s = $this->t3->all();

		foreach ($t3s as $t3) {
			// echo '<pre>';
			// print_r($t3);die;
			echo $t3['uname'] . '<br />';
		}
 
		die;
		$data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];
		$this->load->view('index', [
			'data1' => $data1,
			'data2' => $data2,
			'data3' => $data3,
		]);
	}
}
