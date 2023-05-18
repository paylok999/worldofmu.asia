<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    //
	public function getIndex()
	{
		return view('index', $this->data);
	}
    
    public function register()
	{
		return view('register', $this->data);
	}
    
    public function postRegister(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => 'required|min:4|max:10',
			'password' => 'required|min:4|max:10',
			'email' => 'required|email|max:50',
            'secreta' => 'required|max:10',
        ]);
        
        $postback_data['username'] = $request->username;
		$postback_data['email'] = $request->email;
		$postback_data['password'] = $request->password;
		$postback_data['hash'] = '8415e91f9f0770f983d3e7dace5c6936';
		//$postback_data['secretq'] = 1;
		$postback_data['secreta'] = $request->secreta;
        $postback_url = '/register';
		$res = $this->callApi($postback_url, $postback_data);

        return redirect('/register')->with(['msg' => $res->msg, 'err' => $res->err]);
    }

	
	public function roadmap()
	{
		return view('roadmap', $this->data);
	}
    
    public function rankings(Request $request)
	{
        $class = $request->input('class');
        $get = '/rankings';
        
        $data = [];
     
        $classes = [
            0 => 'Dark Wizard',
            1 => 'Soul Master',
            16 => 'Dark Knight',
            17 => 'Blade Knight',
            32 => 'Elf',
            33 => 'Muse Elf',
            48 => 'Magic Gladiator'
        ];
        
        if(isset($classes[$class])) {
            $get = '/rankings?class='.$class;
        }
        
        $value = \Cache::remember('rankings'.$class, 10, function () use ($get, $data) {
            $res = $this->callGetApi($get, $data);
            return $res;
        });
        
        $this->data['rankings'] = $value;
        $this->data['classes'] = $classes;
      
      //  dd($this->data);
		return view('rankings', $this->data);
	}
}
