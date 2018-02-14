@extends('layouts.master')

@section('topic')
	Current Workers
@endsection

@section('content')


<div class="">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Photo</th>
					<th>Name with Initials</th>
					<th>NIC</th>
					<th>Date of birth</th>
					<th>Contact</th>
					<th>Address</th>
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
				@foreach ($people as $person)
					<tr>
							<td>Photo</td>
							<td>{{$person->namewithin}}</td>
							<td>{{$person->nic}}</td>
							<td>{{$person->dob}}</td>
							<td>{{$person->contact}}</td>
							<td>{{$person->add1}} , </br> {{$person->add2}} , </br> {{$person->add3}} </td>
							<td>
								<a href="{{route('admin-update-data',$person->id)}}">
									Edit

									{{-- <button  onclick="document.getElementById('edit-form').submit();"  type="button" class="btn btn-success btn-lg editlink">

										<form id="edit-form" action="{{ route('admin-update-data', $person->id) }}" method="get" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hiddent" name="id" value="{{$person->id}}">
                                        </form>

	  									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button> --}}
								</a>
								<a >
									<button data-personid='{{$person->id}}' type="button" class="btn btn-danger btn-lg deletelink">
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
	var editUrl='{{route('admin-update-data',$person->id)}}';
	var deleteUrl='{{route('delete-data')}}';

	var token='{{Session::token()}}';
</script>



@endsection