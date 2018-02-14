<?php

namespace App\Http\Controllers;

use App\Officer;
use App\Contact;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function postData(Request $request){

    	//get officer basic details

    	$fullname=$request['fullname'];
    	$inname=$request['inname'];
    	$nic=$request['nic'];
    	$fathername=$request['fathername'];
    	$placeofbirth=$request['placeofbirth'];
    	$dsofbirth=$request['dsofbirthplace'];
    	$birthprovince=$request['birthprovince'];
    	$dob=$request['dob'];
    	$height=$request['height'];
    	$chest=$request['chest'];
    	$eduq=$request['eduql'];
    	$addq=$request['addql'];
    	$married=$request['married'];

    	//get contact details
    	$preadd=$request['preaddress'];
    	$psofprea=$request['psofprea'];
    	$padd=$request['padd'];
    	$psofpa=$request['psofpa'];
    	//$mailaddress=$request['mailaddress'];
    	$gndpa=$request['gndpa'];
    	$tpnr=$request['tpnr'];
    	$tpnm=$request['tpnm'];	



    	//basic officer details

    	$officer=new Officer();
    	$officer->FullName=$fullname;
    	$officer->NameWithIn=$inname;
    	$officer->NIC=$nic;
    	$officer->CurrentPost='constaple';
    	$officer->FathersFullname=$fathername;
    	$officer->PlaceOfBirth=$placeofbirth;
    	$officer->DSofBirthPlace=$dsofbirth;
    	$officer->BirthProvince=$birthprovince;
    	$officer->DOB=$dob;
    	$officer->Height=$height;
    	$officer->Chest=$chest;
    	$officer->EducationQualification=$eduq;
    	$officer->AdditionalQualification=$addq;
    	$officer->Married=true;

    	//officer contact details

    	$contact=new Contact();
    	$contact->PresentAddress=$preadd;
    	$contact->PSPRABelongs=$psofprea;
    	$contact->PermenantAddress=$padd;
    	$contact->PSPABelongs=$psofpa;
    	$contact->GRDivOfPr=$gndpa;
    	$contact->TPResident=$tpnr;
    	$contact->TPMobile=$tpnm;



    	$officer->save();

    	$officer->contact()->save($contact);
    	return 'Hiii';

    }

    public function showInsert(){

    	return view('insert');
    }


}
