<?php
namespace Home\Controller;
use Think\Controller;
class GalleryController extends Controller
{
	public function gallery()
	{	
		$model=D('Gallery');
		$info=$model->indexgar();

		$this->assign(array(
				'info'=>$info
			));
		$this->display();
	}
}