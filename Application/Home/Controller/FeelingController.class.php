<?php
namespace Home\Controller;
use Think\Controller;
class FeelingController extends Controller
{
	public function feeling()
	{	
		$model=D('Feeling');
		$info=$model->showlist();

		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}


















}