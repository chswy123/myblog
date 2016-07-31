<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller
{
	public function blog()
	{	
		$model=D('Blog');
		$res=$model->showlist();
		$info=$res['info'];
		$pageStr=$res['pageStr'];
		// echo '<pre>';
		// print_r($info);exit;

		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}

	public function content()
	{	
		// print_r($_GET);exit;
		$model=D('Blog');
		$info=$model->showedit();
		// print_r($info);exit;

		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}
}