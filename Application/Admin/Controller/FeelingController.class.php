<?php 
namespace Admin\Controller;
use Think\Controller;
class FeelingController extends BaseController 
{	
	/*
	**	后台心情页面首页记录*
	**  author by wy
	*/
	public function Feeling()
	{
		$model=D('Feeling');
		$info=$model->showlist();

		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}



	/*
	**	展示添加页面*
	**  author by wy
	*/
	public function add()
	{
		$this->display();
	}



	/*
	**	添加心情记录*
	**  author by wy
	*/
	public function addData()
	{
		// print_r($_POST);exit;
		if(IS_POST)
		{
			if(!empty($_POST['content']))
			{
				$model=D('Feeling');
				if($model->add())
				{
					$this->success('发布成功！',U('Feeling/feeling'));
					exit;
				}
			}
			else
			{
				$this->error('心情内容不能为空！','',1);
			}
		}


	}



	/*
	**	删除心情记录*
	**  author by wy
	*/
	public function del()
	{
		$model=D('Feeling');
		if($model->delFeeling())
		{
			$this->success('删除成功!',U('Feeling/feeling'));
			exit;
		}
	}

















}