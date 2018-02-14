@extends('layouts.master')

@section('title')
	Enter Data
@endsection

@section('content')
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{route('postinsert')}}" method="POST">
					
					<div class="form-group">
						<label for="fullname">First Name</label>
						<input type="text" name="fullname" id="fullname" class="form-control">
					</div>
					<div class="form-group">
						<label for="inname">Name with Initials</label>
						<input type="text" name="inname" id="inname" class="form-control">
					</div>

					<div class="form-group">
						<label for="nic">National Identity Card No</label>
						<input type="text" name="nic" id="nic" class="form-control">
					</div>

					<div class="form-group">
						<label for="fathername">Father's Name in full</label>
						<input type="text" name="fathername" id="fathername" class="form-control">
					</div>

					<div class="form-group">
						<label for="placeofbirth">Place of birth</label>
						<input type="text" name="placeofbirth" id="placeofbirth" class="form-control">
					</div>

					<div class="form-group">
						<label for="dsofbirthplace">Divisional Secretariat to which the place of birth belongs</label>
						<input type="text" name="dsofbirthplace" id="dsofbirthplace" class="form-control">
					</div>

					<div class="form-group">
						<label for="birthprovince">Province of birth place</label>
						<input type="text" name="birthprovince" id="birthprovince" class="form-control">
					</div>

					<div class="form-group">
						<label for="preaddress">Present Address</label>
						<input type="text" name="preaddress" id="preaddress" class="form-control">
					</div>

					<div class="form-group">
						<label for="psofprea"> Police station to which the present address belongs</label>
						<input type="text" name="psofprea" id="psofprea" class="form-control">
					</div>

					<div class="form-group">
						<label for="padd"> Permenant Address</label>
						<input type="text" name="padd" id="padd" class="form-control">
					</div>

					<div class="form-group">
						<label for="psofpa"> Police station to which the permenant address belongs</label>
						<input type="text" name="psofpa" id="psofpa" class="form-control">
					</div>

					<div class="form-group">
						<label for="mailaddress"> Mailing Address</label>
						<input type="text" name="mailaddress" id="mailaddress" class="form-control">
					</div>

					<div class="form-group">
						<label for="gndpa">Grama Niladari's Division to which permanent address belongs</label>
						<input type="text" name="gndpa" id="gndpa" class="form-control">
					</div>

					<div class="form-group">
						<label for="tpnr">Telephone No: (Residence)</label>
						<input type="text" name="tpnr" id="tpnr" class="form-control">
					</div>
					<div class="form-group">
						<label for="tpnm">Mobile No</label>
						<input type="text" name="tpnm" id="tpnm" class="form-control">
					</div>

					<div class="form-group">
						<label for="dob">Date of birth</label>
						<input type="text" name="dob" id="dob" class="form-control">
					</div>

					<div class="form-group">
						<label for="height">Height</label>
						<input type="text" name="height" id="height" class="form-control">
					</div>

					<div class="form-group">
						<label for="chest">Chest</label>
						<input type="text" name="chest" id="chest" class="form-control">
					</div>

					<div class="form-group">
						<label for="eduql">Education Qualification</label>
						<input type="text" name="eduql" id="eduql" class="form-control">
					</div>

					<div class="form-group">
						<label for="addql">Education Qualification</label>
						<input type="text" name="addql" id="addql" class="form-control">
					</div>

					<div class="checkbox">
    					<label><input type="checkbox" name="married"> Married</label>
  					</div>

  					<input type="hidden" name="_token" value="{{Session::token()}}">
  					<input type="submit" class="btn btn-success" name="submit">


				</form>
			</div>
		</div>
	

@endsection