<?php
namespace Common\Model;
use Think\Model;
class BlogModel extends Model
{	

	/*
	**	查找所有博客文章记录*
	**  author by wy
	*/
	public function showlist()
	{	
		$blog=M('Blog');

		$count=$blog->count();
		$page=new \Think\Page($count,$prePage=5);

		$page->setConfig('prev','<<');
		$page->setConfig('next','>>');
		$pageStr=$page->show();
		// echo '<pre>';
		// print_r($page);exit;
		$info=$blog->limit($page->firstRow.','.$page->listRows)->select();

		return array(
				'info'=>$info,
				'pageStr'=>$pageStr
			);
	}


	/*
	**	添加博客内容，图片*
	**  author by wy
	*/
	public function addData()
	{	
		// print_r($_POST);exit;
		if($_FILES['upload']['error'] == 0)
		{
			//读出配置
			$config = C('IMAGE_CONFIG');
			//设置图片二级目录
			$config['savePath'] = 'Blog/';
			$upload = new \Think\Upload($config);
			$info = $upload -> upload();
			// echo '<pre>';
			// print_r($info);exit;
			if(!$info)
			{
				$this -> error = $upload -> getError();
				return FALSE;
			}
			else
			{	
				$blog=M('Blog');
				$data=$_POST;
				$data['image']=$info['upload']['savepath'].$info['upload']['savename'];
				$data['image_small']='';
				$data['date']=date('Y-m-d h:i:s');
				$blog->add($data);
				return TRUE;
			}
		}
		else
		{	
			return FALSE;
		}
	}


	/*
	**	通过id号查找一条博客文章记录*
	**  author by wy
	*/
	public function showedit()
	{
		// print_r($_GET);exit;
		$blog=M('Blog');
		$data=$_GET['id'];
		$info=$blog->where("id=$data")->find();
		// print_r($info);exit;
		return $info;
	}


	/*
	**	编辑博客内容，图片后的写入数据库*
	**  author by wy
	*/
	public function editData()
	{
		if($_FILES['upload']['error'] == 0)
		{
			//读出配置
			$config = C('IMAGE_CONFIG');
			//设置图片二级目录
			$config['savePath'] = 'Blog/';
			$upload = new \Think\Upload($config);
			$info = $upload -> upload();
			// echo '<pre>';
			// print_r($info);exit;
			if(!$info)
			{
				$this -> error = $upload -> getError();
				return FALSE;
			}
			else
			{	
				$blog=M('Blog');
				$data=$_POST;
				$data['image']=$info['upload']['savepath'].$info['upload']['savename'];
				$data['date']=date('Y-m-d h:i:s');
				$id=$_POST['id'];
				$blog->where("id=$id")->save($data);
				return TRUE;
			}
		}
		else if($_FILES['upload']['error'] == 4)
		{
			// print_r($_POST);exit;
			$blog=M('Blog');
			$data=$_POST;
			$data['date']=date('Y-m-d h:i:s');
			$id=$_POST['id'];
			$blog->where("id=$id")->save($data);
			return TRUE;
		
		}
		else
		{	
			return FALSE;
		}
	}


	/*
	**	Home首页的中部三个博客文章链接*
	**  author by wy
	*/
	public function indexList()
	{
		$model=M('Blog');
		$info=$model->order('id DESC')->limit('3')->select();
		return $info;
	}


	/*
	**	Tours页面展示博文中tag为tours的博文*
	**  author by wy
	*/
	public function toursList()
	{
		$model=M('Blog');
		$info=$model->where('tag="tours"')->order('date DESC')->limit(9)->select();

		return $info;
	}


	/*
	**	根据id号删除一条博文记录*
	**  author by wy
	*/
	public function delBlog()
	{
		$model=M('Blog');
		$id=$_GET['id'];
		return $model->where("id=$id")->delete();
	}












}