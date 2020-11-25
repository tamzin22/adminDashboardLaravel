@extends('layouts.master')

@section('stylesheets')

  {!! Html::style('css/select2.min.css') !!}


@endsection

@section('content')

<div class="row" style="background-color: white" style="margin-top: 20px">
	<div class="col-md-8 col-md-offset">
		<hr>
		<h1>Create student</h1>
		<hr>
		{!! Form::open(['route' => 'students.store']) !!}

		{{Form::label('stud_name','Student Name:')}}
        {{Form::text('stud_name',null,array('class' => 'form-control'))}}

        {{Form::label('email','Student Email:')}}
        {{Form::email('email',null,array('class' => 'form-control'))}}

        {{Form::label('regNo','Registration Number')}}
        {{Form::text('regNo',null,array('class' => 'form-control'))}}

        {{Form::label('units','Select Units')}}
        <select class="form-control select2-multi" name="units[]" multiple="multiple">
        	@foreach($units as $unit)

        	 <option value="{{$unit->id}}">{{$unit->unit_name}}</option>

        	@endforeach
        </select>



        {{Form::submit('Create Student' ,['class' => 'btn btn-success'])}}  
        {!! Form::close() !!}

	</div>
</div>

@endsection

@section('scripts')

 {!! Html::script('js/select2.min.js')!!}

 <script type="text/javascript">
 	$('.select2-multi').select2();
 </script>

@endsection