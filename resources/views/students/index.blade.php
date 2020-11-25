@extends('layouts.master')

@section('title' ,'|All Units')

@section('content')


<div class="row">

	<div class="col-md-10">
		<h1> All Students</h1>
    <hr>
	</div>
	<div class="col-md-2">
		<a  href="{{ route('students.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing"> Create New Student</a>
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
				<th>Student Name</th>
				<th>Student Email</th>
				<th>Registration Number</th>
				<tH>Created At</th>
			</thead>
			<tbody>
				@foreach($students as $student)

				<tr>
					<th>{{ $student-> id}}</th>
					<td>{{ $student -> stud_name}}</td>
					<td>{{ $student -> email}}</td>
					<td>{{ $student -> regNo}}</td>
					<td>{{ $student -> created_at}}</td>
					<td><a href="#" class="btn btn-default"> View</a> <a href="#" class="btn btn-default">Edit</a></td>
				</tr>


				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection