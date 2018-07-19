<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg extends CI_Controller 
{
	//添加
	public function add()
	{
		#1.判断是否post提交
		if (IS_POST) {
			#2.接受数据
			$postData['uname'] = $this->input->post('uname');
			$postData['content'] = $this->input->post('content');
			$postData['created_at'] = $postData['updated_at'] = time();
			#3.入库
			$this->load->model('MsgModel');
			$rs = $this->MsgModel->add($postData);
			#4.判断
			if ($rs) {
				echo "<script>alert('宝贝真棒');location.href='".site_url('msg/index')."'</script>";
			} else {
				echo "<script>alert('不行，要加油');location.href='".site_url('msg/index')."'</script>";
			}
		}
	}


	public function index()
	{
		#1.获取数据
		$this->load->model('MsgModel');
		$msgs = $this->MsgModel->all();
		#2.加载视图并传递数据
		// $this->load->view('msg_index', [
		// 	'msgs' => $msgs
		// ]);
		$this->load->view('msg_index', compact('msgs'));
	}
}
