<?php
namespace Common\Model;
use Think\Model;
class FeelingModel extends Model
{	

	/*
	**	查找所有心情记录*
	**  author by wy
	*/
	public function showlist()
	{
		$model=M('Feeling');
		$info=$model->select();
		return $info;
	}


	/*
	**	添加心情记录*
	**  author by wy
	*/
	public function add()
	{
		// print_r($_POST);exit;
		$model=M('Feeling');
		$arr=$_POST;
		$arr['date']=date('Y-m-d H:i:s');
		$info=$model->add($arr);

		return True;
	}


	/*
	**	根据ID号删除一条心情记录*
	**  author by wy
	*/
	public function delFeeling()
	{
		$model=M('Feeling');
		$id=$_GET['id'];
		return $model->where("id=$id")->delete();
	}


















}