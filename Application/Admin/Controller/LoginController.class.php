<?php 
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{	
	//登录
	public function login()
	{	
		if(IS_POST)
		{
			$model=D("Admin");
			if($model->create(I('post.'),9))
			{
				if($model->login())
				{
					$this->success('登录成功！',U('Admin/Index/index'));
					exit;
				}
			}
			$this->error($model->getError());
		}
		// var_dump($_GET);
		// echo "这是一
		// echo 123;
		$this->display();
	}

	//登出
	public function logout()
	{
		$model=D("Admin");
		$model->logout();
		redirect(U('Login/login'));
	}


	//ajax判断用户名
	public function checkuser()
	{	
		$username=$_POST['value'];
		// var_dump($username);exit;
		$info=D("Admin");
		$res=$info->where(array('username'=>array("eq",$username)))->find();
		if($res)
		{
			echo "<span style='color:green;'>用户名正确！</span>";
		}
		else
		{
			echo "<span style='color:red'>用户名不正确！</span>";
		}
		exit;
	}


	//ajax判断密码
	public function checkpwd()
	{	
		$username=$_POST['username'];
		$password=$_POST['password'];
		// var_dump($password);exit;
		// $password=$_POST['value'];
		$info=D("Admin");
		$res=$info->where(array('username'=>array('eq',$username)))->find();
		if($res)
		{
			if($password==$res['password'])
			{
				echo "<span style='color:green;'>密码正确！</span>";
			}
			else
			{
				echo "<span style='color:red;'>密码不正确！</span>";
			}
		}
		
	}
}