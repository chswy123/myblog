<?php 
namespace Admin\Controller;
use Think\Controller;
class GalleryController extends BaseController
{	
	/*
	**	上传图片首页*
	**  author by wy
	*/
	public function gallery()
	{	
		$model=D('Gallery');
		$res=$model->show();

		$info = $res['info'];
		$pageStr=$res['pageStr'];
		$this->assign(array(
				'pageStr'=>$pageStr,
				'info'=>$info
			));
		$this->display();
	}


	/*
	**	上传图片页面操作*
	**  author by wy
	*/
	public function add()
	{	
		if(IS_POST&&IS_FILE){
			// echo '<pre>';
			// print_r($_FILES);
			// print_r($_POST);exit;
			if($_FILES['upload']['error']!=4)
			{
				$model=D('Gallery');
				if($model->create(I('post.')))
				{
					if($model->addpic())
					{
						$this->success('上传成功！',U('Gallery/gallery'));
						exit;
					}
					else
					{	
						$error=$model->getError();
						$this->error($error);
					}
				}
			}
			else
			{
				$this->error('图片不能为空!','',1);
			}
		}

		$this->display();
	}



	/*
	**	编辑图片页面操作*
	**  author by wy
	*/
	public function edit()
	{	
		if(IS_GET){
			// print_r($_GET);exit;
			$model=D('Gallery');
			$info=$model->editpic();
			// print_r($info);exit;
		}

		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}



	/*
	**	编辑图片页面后提交*
	**  author by wy
	*/
	public function editAction()
	{
		// print_r($_POST);exit;
		if(IS_POST){
			$model=D('Gallery');
			if($model->create(I('post.')))
			{
				if($model->edit())
				{		
					$this->success('更改成功！',U('Gallery/gallery'));
					exit;
				}
				else
				{
					$error=$model->getError();
					$this->error($error);
				}
			}
		}		
	}


	/*
	**	删除一条记录*
	**  author by wy
	*/
	public function del()
	{
		$model=D('Gallery');
		if($model->delGar())
		{
			$this->success('删除成功！',U('Gallery/gallery'));
			exit;
		}
	}

























}