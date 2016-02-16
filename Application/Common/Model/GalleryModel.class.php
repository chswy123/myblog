<?php
namespace Common\Model;
use Think\Model;
class GalleryModel extends Model
{	
	/*
	**	查询所有图集记录*
	**  author by wy
	*/
	public function show()
	{
		$model=M('Gallery');

		$count = $model->count();
		$page = new \Think\Page($count,$prepage=5);
		$page->setConfig('prev','<<');
		$page->setConfig('next','>>');
		$pageStr=$page->show();

		$info = $model->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		return array(
				'info'=>$info,
				'pageStr'=>$pageStr
			);
	}


	/*
	**	前台中部的六条记录输出*
	**  author by wy
	*/
	public function indexmid()
	{
		$model=M('Gallery');
		$info=$model->order('id desc')->limit('6')->select();
		return $info;		
	}


	/*
	**	前台相册页面的12条记录输出*
	**  author by wy
	*/
	public function indexgar()
	{
		$model=M('Gallery');
		$info=$model->order('id desc')->limit('12')->where('is_show = 1')->select();
		// print_r($info);exit;
		return $info;
	}

	/*
	**	上传图片*
	**  author by wy
	*/
	public function addpic()
	{
		$config=C('IMAGE_CONFIG');

		$config['savePath']='Gallery/';
		$upload = new \Think\Upload($config);
		$info=$upload->upload();
		// echo '<pre>';
		// print_r($info);exit;
		if(!$info)
		{
			$this -> error = $upload->getError();
			return FALSE;
		}
		else
		{
			$gar=M('Gallery');
			$data=$_POST;
			$data['image']=$info['upload']['savepath'].$info['upload']['savename'];
			
			//生成缩略图，并路径存入数据库
			$image=new \Think\Image();
			$image->open($config['rootPath'].$data['image']);
			$sm_image=$info['upload']['savepath'].'sm_'.$info['upload']['savename'];
			$image->thumb(80,80)->save($config['rootPath'].$sm_image);
			$data['image_small']=$sm_image;
			$data['date']=date('Y-m-d H:i:s');
			$gar->add($data);
			return TRUE;
		}
	}


	/*
	**	根据id查找一条图片记录*
	**  author by wy
	*/
	public function editpic()
	{
		$model=M('Gallery');
		$id=$_GET['id'];
		return $model->where("id=$id")->find();
	}


	/*
	**	根据id更新一条图片记录是否显示*
	**  author by wy
	*/
	public function edit()
	{
		$model=M('Gallery');
		$id=$_POST['id'];
		$data['is_show']=$_POST['is_show'];
		return $model->where("id=$id")->save($data);
	}



	/*
	**	根据id删除一条图片记录*
	**  author by wy
	*/
	public function delGar()
	{
		$model=M('Gallery');
		$id=$_GET['id'];
		return $model->where("id=$id")->delete();
	}





















}