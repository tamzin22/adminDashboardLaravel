@extends('layouts.master')

@section('title' ,'|All Units')

@section('content')


<div class="row">

	<div class="col-md-10">
		<h1> All units</h1>
    <hr>
	</div>
	<div class="col-md-2">
		<a  href="{{ route('units.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing"> Create New Unit</a>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Unit Name</th>
				<th>Unit Code</th>
				<tH>Created At</th>
			</thead>
			<tbody>
				@foreach($units as $unit)

				<tr>
					<th>{{ $unit-> id}}</th>
					<td>{{ $unit -> unit_name}}</td>
					<td>{{ $unit -> unit_code}}</td>
					<td>{{ $unit -> created_at}}</td>
					<td><a href="#" class="btn btn-default"> View</a> <a href="#" class="btn btn-default">Edit</a></td>
				</tr>


				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection