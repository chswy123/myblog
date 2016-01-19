<?php 
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//验证登录
		if(!session('username'))
		{
			$this->error('必须先登录!',U('Login/login'));
		}
	}
}