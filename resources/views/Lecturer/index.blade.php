@extends('layouts.master')

@section('title' ,'|All Lectures')

@section('content')


<div class="row">

	<div class="col-md-10">
		<h1> All Lectures</h1>
    <hr>
	</div>
	<div class="col-md-2">
		<a  href="{{ route('Lecturer.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing"> Create New Lectures</a>
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
				<th>Lectures Name</th>
				<th>Lectures Email</th>
				<th>Employee Number</th>
				<tH>Created At</th>
			</thead>
			<tbody>
				@foreach($lecturers as $lecturer)

				<tr>
					<th>{{ $lecturer-> id}}</th>
					<td>{{ $lecturer -> lect_name}}</td>
					<td>{{ $lecturer -> email}}</td>
					<td>{{ $lecturer -> employNo}}</td>
					<td>{{ $lecturer -> created_at}}</td>
					<td><a href="#" class="btn btn-default"> View</a> <a href="#" class="btn btn-default">Edit</a></td>
				</tr>


				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection