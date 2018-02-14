@extends('layouts.front')


@section('content')
	<div class="col-md-12">
		<div class="row">

			<div class="col-md-3">
				
				<div class="row">
					<div class="col-md-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>

				</div>

			</div>


			<div class="col-md-6">
				
				<div class="row well search-list">
					<div class="col-md-4" >
						<img src="{{asset('images/1.jpg')}}" class="img-circle"  alt="Cinque Terre" width="150" height="150">

					</div>
					<div class="col-md-8 ">
						<b><h3 class="name">Full Name</h3></b>

						<h5>DOB</h5>

						<h5>Category</h5>

					</div>

				</div>

			</div>
		</div>
	</div>
@endsection


