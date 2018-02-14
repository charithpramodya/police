<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;

class ShowDataController extends Controller
{
    public function __construct(){
    	$this->middleware("auth:admin");
    }

    public function showDataForm(){

    	$people=Person::all();

    	$data=['people'=>$people];

    	return view('admin.show-data',$data);
    }
}
