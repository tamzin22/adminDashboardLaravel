@extends('layouts.master')

@section('title','|Create Unit')

@section('content')

 
        @include('partials._messages')

        {{Auth::check() ?"Logged In" :"Logged Out"}}

 <div class="row" style="background-color: white" style="margin-top: 20px">
	<div class="col-md-8 col-md-offset">
		<hr>

		<h1 style="text-align: center">Create Units</h1>

		{!! Form::open(['route' => 'units.store']) !!}

		{{Form::label('unit_name','Unit Name:')}}
        {{Form::text('unit_name',null,array('class' => 'form-control'))}}

        {{Form::label('unit_code','Unit Code:')}}
        {{Form::text('unit_code',null,array('class' => 'form-control'))}}

        {{Form::submit('Create Unit',array('class' => 'btn btn-success btn-lg'))}}

        {!! Form::close()!!}
 	</div>
 </div>

@endsection
