<?php 
	namespace Admin\Controller;
	use Think\Controller;
class IndexController extends BaseController
{
	public function index()
	{	
		$ch = curl_init();
	    $url_weather = 'http://apis.baidu.com/apistore/weatherservice/weather?citypinyin=beijing';
	    $url_news = 'http://apis.baidu.com/songshuxiansheng/news/news';
	    $header = array(
	        'apikey: 2383f4209ac7a5c7578d316ce231b0cf',
	    );
	    // 添加apikey到header
	    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    // 执行HTTP请求
	    curl_setopt($ch , CURLOPT_URL , $url_weather);
	    $res_weather = curl_exec($ch);

	    // echo '<pre>';
	    // var_dump(json_decode($res));
	    $res_weather=json_decode($res_weather,1);
	    // print_r($res);exit;	

	    $this->assign(array(
	    		'info'=>$res_weather
	    	));
    	$this->display();
	}


	public function ajaxtime(){
    	// echo 123;
    	$date=Date("Y-m-d H:i:s");
    	// print_r($date);exit;
    	echo $date;
    }









}