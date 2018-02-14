@extends('layouts.master')


@section('title')
	Login
@endsection


@section('content')
	<div class="row" style="margin-top:15%;">
		<div class="col-md-6 col-md-offset-3">
			<div class="well">
				<form method="POST" action="{{Route('postLogin')}}">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					
						<input type="hidden" name="_token" value="{{Session::token()}}">

					<input type="Submit" name="submit">
					
				</form>

			</div>
		</div>
		
	</div>

@endsection