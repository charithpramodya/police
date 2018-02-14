@extends('layouts.master')

@section('topic')
	Add Worker's data
@endsection 





@section('content')
	<div class="col-md-12">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</div>
		</div>


		<div class="row">


			<div class="col-md-8 col-md-offset-2">
				<form  action="{{route('admin-post-data')}}" method="post">
					<div class="form-group">
						<label>Full Name</label>
						<input placeholder="Full Name" class="form-control" type="text" name="fullname"></input>
					</div>

					<div class="form-group">
						<label>Name with initials</label>
						<input placeholder="Name with initials" class="form-control" type="text" name="namewithin"></input>
					</div>

					<div class="form-group">
						<label>NIC</label>
						<input placeholder="NIC" class="form-control" type="text" name="nic"></input>
					</div>


					<div class="form-group">
						<label>Category</label>
						<input placeholder="Catagory" class="form-control" type="text" name="catagory"></input>
					</div>

					<div class="form-group">
						<label>Post</label>
						<input placeholder="Post" class="form-control" type="text" name="jobpost"></input>
					</div>



					<!--address-->
					<div class="form-group" style="margin-bottom:0px;">
						<label>Address</label>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;">
						
						<input placeholder="" class="form-control" type="text" name="add1"></input>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;">
						
						<input placeholder="" class="form-control" type="text" name="add2"></input>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;">
						
						<input placeholder="" class="form-control" type="text" name="add3"></input>
					</div>

					<!--/address-->


					<!--district and province-->

					<div class="form-group">
						<label class="col-md-12" style="padding-left:0px;">District</label>
						<input placeholder="District" class="form-control" type="text" name="district"></input>
					</div>

					<div class="form-group">
						<label>Province</label>
						<input placeholder="Province" class="form-control" type="text" name="province"></input>
					</div>


					<!--/district and province-->

					<div class="form-group">
						<label>Birthday</label>
						<input placeholder="Birthday" class="form-control" type="date" name="dob"></input>
					</div>

					<div class="form-group">
						<label>Contact</label>
						<input placeholder="Contact" class="form-control" type="text" name="contact"></input>
					</div>


					<!--height-->
					<div class="form-group" style="margin-bottom:0px;">
						<label>Height</label>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;">
						
						<input placeholder="Feet" class="form-control" type="text" name="feet"></input>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;">
						
						<input placeholder="Inches" class="form-control" type="text" name="inches"></input>
					</div>
					<!--/height-->

					<!--chest and eye colour-->

					<div class="form-group col-md-6" style="padding-left:0px;">
						<label>Chest</label>
						<input placeholder="Chest" class="form-control" type="text" name="chest"></input>
					</div>

					<div class="form-group col-md-6" style="padding-left:0px;">
						<label>Eye colour</label>
						<input placeholder="Eye colour" class="form-control" type="text" name="eyecol"></input>
					</div>

					<!--/chest and eye colour-->

					<!--image-->
					<div class="form-group">
						<label>Photo</label>
						<input  class="form-control" type="file" name="image"></input>
					</div>
					<!--/image-->

					<!--/Qualifications-->
					<div class="form-group">
						<label>Education qualifications</label>
						<textarea class="form-control" name="eduq"  cols="30" rows="10"></textarea>
					</div>

					<div class="form-group">
						<label>Extra qualifications</label>
						<textarea class="form-control" name="extq"  cols="30" rows="10"></textarea>
					</div>

					<input type="hidden" name="_token"	value="{{Session::token()}}">

					<input type="submit" name="submit" class="btn btn-success">

				</form>

			</div>
		</div>
	</div>

@endsection