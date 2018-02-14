@extends('layouts.master')

@section('topic')
	Current users
@endsection

@section('content')


<div class="">
	<div class="col-md-8 col-md-offset-2">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>NIC</th>
					<th>Contact</th>
					<th>Description</th>
					<th>Organization</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>NIC</td>
							<td>Description</td>
							<td>Organization</td>
							<td>
								<a >
									<button data-personid='{{$user->id}}' type="button" class="btn btn-danger btn-lg cancellink">
	  									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</button>
								</a>
							</td>
					</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

<script>
	var confirmUrl='{{route('admin-confirm-user')}}';
	var cancelUrl='{{route('admin-cancel-user')}}';

	var token='{{Session::token()}}';
</script>


@endsection