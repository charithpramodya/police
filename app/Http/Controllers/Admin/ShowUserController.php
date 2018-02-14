<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class ShowUserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:admin');
    }

    public function showUsersForm(){

    	//$users = DB::select('select * from users where status=0');
    	$users = DB::table('users')->where('status', 0)->get();
    	$data=['users'=>$users];
    	//print_r($users[0]->name);
    	return view('admin.show-users', $data);

    }

    public function confirmUser(Request $request){
        return response()->json(['message'=>$request['id']]);
    }

    public function cancelUser(Request $request){
        return response()->json(['message'=>$request['id']]);
    }

    public function showCurUsersForm(){

        $users = DB::table('users')->where('status', 1)->get();
        $data=['users'=>$users];
        //print_r($users[0]->name);
        return view('admin.show-cur-users', $data);
    }
}
