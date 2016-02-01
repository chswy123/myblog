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

		$info = $model->limit($page->firstRow.','.$page->listRows)->select();
		return array(
				'info'=>$info,
				'pageStr'=>$pageStr
			);
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
			$data['image_small']='';
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