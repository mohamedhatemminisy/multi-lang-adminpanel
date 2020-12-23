<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use Auth;
 
class LoginController extends Controller
{
    public function login(){
    	return view('dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request){
      	$remember_me = $request->has('remember_me')?true:false;
    	if(auth()->guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember_me)){

    		return redirect()->route('admin.dashboard');
    	}
     		return redirect()->back()->with(['error' => 'هناك خطا']);
    }

    public function logout(){
        $guard = $this->getGuard();
        $guard->logout();
        return redirect()->route('admin.login');
    }

    public function getGuard(){
        return auth('admin');
    }
}
