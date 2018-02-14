<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use View;
use Session;

class UpdateDataController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function updateData(Request $request, $id){


    	$person = DB::table('person')->where('id',$id)->first();
    	$data=['person'=>$person];
    	return view('admin.update-data', $data);
    }


    public function postUpdateData(Request $request){



          $this->validate($request,[
         'nic'=>'bail|required|max:10',
         'fullname'=>'required|max:255',
         'namewithin'=>'required|max:255',
         'dob'=>'required|date',
         'add1'=>'required|max:255',
         'add2'=>'required|max:255',
         'add3'=>'nullable|max:255',
         'jobpost'=>'nullable|max:255',
         'contact'=>'required|max:10',
         'image'=>'nullable|max:255',
         'feet'=>'required|max:2',
         'inches'=>'required|max:2',
         'chest'=>'required|max:2',
         'eyecol'=>'max:10|nullable',
         'eduq'=>'nullable',
         'extq'=>'nullable',
        
         ]);

         
    	$person=DB::table('person')->where('id', $request['id']);


    	$user=[
        	 'nic'=>$request['nic'],
             'fullname'=>$request['fullname'],
             'namewithin'=>$request['namewithin'],
             'dob'=>$request['dob'],
             'add1'=>$request['add1'],
             'add2'=>$request['add2'],
             'add3'=>$request['add3'],
             'post'=>$request['jobpost'],
             'cat_id'=>$request[''],
             'district_id'=>$request[''],
             'province_id'=>$request[''],
             'contact'=>$request['contact'],
             'image'=>$request['image'],
             'feet'=>$request['feet'],
             'inch'=>$request['inches'],
             'chest'=>$request['chest'],
             'eyecol'=>$request['eyecol'],
             'eduq'=>$request['eduq'],
             'extq'=>$request['extq']
    	];

    	$person->update($user);

        $person = DB::table('person')->where('id', $request['id'])->first();

        Session::flash('success', 'Successfully saved');

        return redirect()->route('admin-update-data', $person->id);
    	 //return redirect()->back();//view('admin.update-data', ['person'=>$person]); 

    }

    public function edit(Request $request){

        return response()->json(['message'=>$request['id']]);
    }
}
