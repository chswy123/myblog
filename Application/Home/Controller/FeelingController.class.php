<?php
namespace Home\Controller;
use Think\Controller;
class FeelingController extends Controller
{
	public function feeling()
	{	
		$model=D('Feeling');
		$res=$model->showlist();
		$info=$res['info'];
		$pageStr=$res['pageStr'];

		// echo '<pre>';
		// print_r($pageStr);exit;
		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}


















}