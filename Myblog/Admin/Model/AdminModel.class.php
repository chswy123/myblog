<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model
{
	public function login()
	{
		$username=$this->username;
		$password=$this->password;
		//
		$res=$this->where(array('username'=>array('eq',$username)))->find();
		if($res)
		{
			if($res['password']==md5($password))
			{
				session('id',$res['id']);
				session('username',$res['username']);
				return true;
			}
			else
			{
				$this->error="密码不正确！";
				return false;
			}
		}
		else
		{
			$this->error="账号不存在！";
			return false;
		}
	}


	public function logout()
	{
		session(null);
	}

	
}