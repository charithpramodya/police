@extends('layouts.master')

@section('topic')
	User data
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4" style="padding-left:50px">
					<img src="{{asset('images/1.jpg')}}" class="img-circle"  alt="Cinque Terre" width="236" height="236">

				</div>
				<div class="col-md-8 " style="padding-top:10px;">
					
						<div class="form-group">
							<label>Full Name</label>
							<input placeholder="Full Name" value="" class="form-control" type="text" value="{{$person->fullname}}" name="fullname"></input>
						</div>

						<div class="form-group">
							<label>Name with initials</label>
							<input placeholder="Name with initials" class="form-control" type="text"value="{{$person->namewithin}}" name="namewithin"></input>

						</div>

						<div class="form-group">
							<label>Birthday</label>
							<input placeholder="Birthday" value="{{$person->dob}}" class="form-control" type="date" name="dob"></input>
						</div>

				</div>
			</div>

			<div class="row" style="padding-top:20px;">
				<div class="col-md-4">
					<div class="form-group">
						<label>NIC</label>
						<input placeholder="NIC" value="{{$person->nic}}" class="form-control" type="text" name="nic"></input>
					</div>

					<div class="form-group">
						<label>Category</label>
						<input placeholder="Catagory"  class="form-control" type="text" name="catagory"></input>
					</div>

					<div class="form-group">
						<label>Post</label>
						<input placeholder="Post" value="{{$person->post}}" class="form-control" type="text" name="jobpost"></input>
					</div>

					<!--height-->
					<div class="form-group" style="margin-bottom:0px;">
						<label>Height</label>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;">
						
						<input placeholder="Feet" value="{{$person->feet}}" class="form-control" type="text" name="feet"></input>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;padding-right:0px;">
						
						<input placeholder="Inches" value="{{$person->inch}}" class="form-control" type="text" name="inches"></input>
					</div>
					<!--/height-->

					<!--chest and eye colour-->

					<div class="form-group col-md-6" style="padding-left:0px;">
						<label>Chest</label>
						<input placeholder="Chest" value="{{$person->chest}}" class="form-control" type="text" name="add2"></input>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;padding-right:0px;">
						<label>Eye colour</label>
						<input placeholder="Eye colour" value="{{$person->eyecol}}" class="form-control" type="text" name="add3"></input>
					</div>

					<!--/chest and eye colour-->


				</div>	

				<div class="col-md-6">
					
					<!--address-->

					<div class="form-group " ">
						<label>Address</label>
						<input placeholder="" value="{{$person->add1}}" class="form-control" type="text" name="add1"></input>
					</div>

					<div class="form-group " >
						
						<input placeholder="" value="{{$person->add2}}" class="form-control" type="text" name="add2"></input>
					</div>

					<div class="form-group ">
						
						<input placeholder="" value="{{$person->add3}}" class="form-control" type="text" name="add3"></input>
					</div>

					<!--/address-->


					<!--district and province-->

					<div class="form-group">
						<label class="col-md-12" style="padding-left:0px;">District</label>
						<input placeholder="District"  class="form-control" type="text" name="district"></input>
					</div>

					<div class="form-group">
						<label>Province</label>
						<input placeholder="Province" class="form-control" type="text" name="province"></input>
					</div>


					<!--/district and province-->

					

					<div class="form-group">
						<label>Contact</label>
						<input placeholder="Contact" value="{{$person->contact}}" class="form-control" type="text" name="contact"></input>
					</div>



				</div>



			</div>
		</div>
	</div>

@endsection