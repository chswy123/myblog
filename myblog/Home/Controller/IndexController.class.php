<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index()
    {	

    	$model=D('Blog');
    	$info=$model->indexList();

        $gallerymodel=D('Gallery');
    	$garinfo=$gallerymodel->indexmid();
        // echo '<pre>';
        // print_r($garinfo);

    	$this->assign(array(
            'garinfo'=>$garinfo,
    		'info'=>$info
    		));
    	$this->display();
    }











}