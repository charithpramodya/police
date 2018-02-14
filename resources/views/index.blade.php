@extends('layouts.front')


@section('content')
	@component('components.para')
	@endcomponent
@endsection


@section('catlist')
	<div class="col-md-12" style="background-color: black; margin-left:0px; margin-right:0px;">
		<div class="row">
			<div class="container content-center">
				<div class="col-md-4 feature-list ">

					<div class="icon" style="font-size:80px;">
                        <i class="glyphicon glyphicon-tint"></i>
                    </div>
                    <p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-md-4 feature-list">
					<div class="icon" style="font-size:80px;">
                        <i class="glyphicon glyphicon-tags"></i>
                    </div>
                    <p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					
				</div>
				<div class="col-md-4 feature-list">
					<div class="icon" style="font-size:80px;">
                        <i class="glyphicon glyphicon-send"></i>
                    </div>
                    <p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</div>


@endsection