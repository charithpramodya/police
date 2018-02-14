<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;

class AddDataController extends Controller
{

	public function __construct()
	{
   		 $this->middleware('auth:admin');
   	}

   	public function showForm()
   	{
   		return view('admin.details');
   	}

   	/*public function postData(Request  $request){

   		$person=new Person();
   		$person->name=$request['fullname'];
   		$person->age=$request['age'];
   		$person->height=$request['height'];
   		$person->chest=$request['chest'];
   		$person->contact=$request['contact'];
   		$person->save();
   		return "Hii";
   	}*/

      
      public function postData(Request  $request){





         $this->validate($request,[
         'nic'=>'bail|required|unique:Person|max:10',
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


         $person=new Person();
         $person->nic=$request['nic'];
         $person->fullname=$request['fullname'];
         $person->namewithin=$request['namewithin'];
         $person->dob=$request['dob'];
         $person->add1=$request['add1'];
         $person->add2=$request['add2'];
         $person->add3=$request['add3'];
         $person->post=$request['jobpost'];
         $person->cat_id=$request[''];
         $person->district_id=$request[''];
         $person->province_id=$request[''];
         $person->contact=$request['contact'];
         $person->image=$request['image'];
         $person->feet=$request['feet'];
         $person->inch=$request['inches'];
         $person->chest=$request['chest'];
         $person->eyecol=$request['eyecol'];
         $person->eduq=$request['eduq'];
         $person->extq=$request['extq'];

         $person->save();
         return redirect()->route('admin-show-data');
      }  

}
