<?php 
	namespace Home\Controller;
	use Think\Controller;
class ToursController extends Controller
{	

	/*
	**	Tours页面中展示*
	**  author by wy
	*/
	public function Tours()
	{	
		$model=D('Blog');
		$info=$model->toursList();

		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}






















}