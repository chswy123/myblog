<?php 
	namespace Admin\Controller;
	use Think\Controller;
class BlogController extends BaseController
{

	/*
	**	展示博客记录
	*/		
	public function blog()
	{	
		$list=D('Blog');
		$res=$list->showlist();

		// echo '<pre>';
		// print_r($res);exit;
		$info=$res['info'];
		$pageStr=$res['pageStr'];
		$this->assign(array(
				'info'=>$info,
				'pageStr'=>$pageStr
			));
		$this->display();
	}


	/*
	**	上传博客内容，图片*
	**  author by wy
	*/
	public function add()
	{	
		// echo '<pre>';
		if(IS_POST&&IS_FILE)
		{	
			if(!empty($_POST['title'])&&$_FILES['upload']['error']!=4)
			{	
				
				$model=D('Blog');
				if($model->create(I('post.'),1))
				{
					if($model->addData())
					{
						$this->success('操作成功！',U('Blog/blog'));
						exit;
					}
				}
				else
				{
					$error=$model->getError();
					$this->error($error);
				}
			}
			else
			{
				$this->error('标题不能为空，且图片不能为空!','',1);
			}
			
		}

		$this->display();
	}


	/*
	**	编辑博客内容，图片*
	**  author by wy
	*/
	public function showedit()
	{	
		if(IS_GET)
		{
			if(!empty($_GET['id']))
			{
				$mode=D('Blog');
				if($mode->create(I('get.')))
				{
					$info=$mode->showedit();
				}
			}
			else
			{
				return FALSE;
			}
		}

		$this->assign('info',$info);
		$this->display();
	}


	/*
	**	编辑博客的动作*
	**  author by wy
	*/
	public function edit()
	{
		if(IS_POST&&IS_FILE)
		{	
			$model=D('Blog');
			if($model->create(I('post.'),1))
			{
				if($model->editData())
				{
					$this->success('操作成功！',U('Blog/blog'));
					exit;
				}
			}
			else
			{
				$error=$model->getError();
				$this->error($error);
			}
		}
	}


	/*
	**	编辑删除一条记录*
	**  author by wy
	*/
	public function del()
	{
		// print_r($_GET);exit;
		$model=D('Blog');
		if($model->delBlog())
		{
			$this->success('删除成功！',U('Blog/blog'),1);
			exit;
		}
	}














}