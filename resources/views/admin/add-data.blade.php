@extends('layouts.master')


@section('topic')
	Add worker details
@endsection

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-4">
		<form method="post" action="{{route('admin-post-data')}}">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" type="text" name="fullname"/>
			</div>

			<div class="form-group">
				<label>Age</label>
				<input class="form-control" type="text" name="age"/>
			</div>

			<div class="form-group">
				<label>height</label>
				<input class="form-control" type="text" name="height"/>
			</div>

			<div class="form-group">
				<label>chest</label>
				<input class="form-control" type="text" name="chest"/>
			</div>

			<div class="form-group">
				<label>Contact No.</label>
				<input class="form-control" type="text" name="contact"/>
			</div>

			<input type="hidden" value={{Session::token()}} name="_token">

			<input class="btn btn-success" name="submit" type="submit">
		</form>
	</div>
</div>




@endsection