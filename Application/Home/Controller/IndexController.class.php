<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index()
    {	

    	$model=D('Blog');
    	$info=$model->indexList();
    	

    	$this->assign(array(
    		'info'=>$info
    		));
    	$this->display();
    }











}