<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Illuminate\Validation\ValidationException;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\MessageBag;

class AdminLoginController extends Controller
{


     protected $redirectTo = '/home';


    use  AuthenticatesUsers;



	public function __construct(){
		$this->middleware('guest:admin',['except'=>['logout']]);
	}

    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request){



        $this->validateLogin($request);


    	if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
    		return redirect()->intended(route('admin-dashboard'));
    	}

    	return $this->sendFailedLoginResponse($request);//redirect()->back()->withInput($request->only('email','remember')));

    }

    public function logout(){

        Auth::guard('admin')->logout();

       return redirect('/');
    }


    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
}
