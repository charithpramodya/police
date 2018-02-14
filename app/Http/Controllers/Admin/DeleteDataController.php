<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DeleteDataController extends Controller
{
    public function __construct(){
    	$this->middleware("auth:admin");
    }

    public function deleteData(Request $request){

    	return response()->json(['message'=>$request['id']]);
		
		
    	/*$id=$request['id'];

    	DB::table('people')->where('id', $id)->delete();
    	return redirect()->back();*/
    }
}
