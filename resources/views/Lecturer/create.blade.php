@extends('layouts.master')

@section('stylesheets')

  {!! Html::style('css/select2.min.css') !!}


@endsection

@section('content')

<div class="row" style="background-color: white" style="margin-top: 20px">
	<div class="col-md-8 col-md-offset">
		<hr>
		<h1>Create Lecturer</h1>
		<hr>
		{!! Form::open(['route' => 'Lecturer.store']) !!}

		{{Form::label('lect_name','Lecturer Name:')}}
        {{Form::text('lect_name',null,array('class' => 'form-control'))}}

        {{Form::label('email','Lecturer Email:')}}
        {{Form::email('email',null,array('class' => 'form-control'))}}

        {{Form::label('employNo','Employment number')}}
        {{Form::text('employNo',null,array('class' => 'form-control'))}}

        {{Form::label('units','Select Units')}}
        <select class="form-control select2-multi" name="units[]" multiple="multiple">
        	@foreach($units as $unit)

        	 <option value="{{$unit->id}}">{{$unit->unit_name}}</option>

        	@endforeach
        </select>



        {{Form::submit('Create Lecturer' ,['class' => 'btn btn-success'])}}  
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