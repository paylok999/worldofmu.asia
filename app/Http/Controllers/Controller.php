<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public $host = 'http://139.99.124.168:8080/woldofmu/public';
    public $data = [];
	public $hashkey = '8415e91f9f0770f983d3e7dace5c6936';
	public $updates = [];
	public $vip;
    
    public function __construct()
    {
        $this->data['online'] = $this->getonline();
    }
    
    public function callApi($route, $data = array())
    {

    	$postback_url = $this->host . $route;
        
    	$postback_data = $data;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $postback_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postback_data));
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		//var_dump($response);die();
		$res = json_decode($response);
		
		return $res;
    }
    
    public function callGetApi($route, $data = array())
    {

    	$postback_url = $this->host . $route;

    	$response = file_get_contents($postback_url);

		$res = json_decode($response);

		return $res;
    }
    
    public function getonline()
    {
         $value = \Cache::remember('online', 5, function () {
             
            $postback_url =  '/allonline';
            $res = $this->callGetApi($postback_url);
            $countOnline = count($res);
            
            if($countOnline > 50) {
                $countOnline = $countOnline + 20;
            }
            
            return $countOnline;
            
        });
        
        return $value;
    }
}
