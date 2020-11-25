@extends('layouts.master')

@section('title','|View Units')

@section('content')


<hr>

<h1>{{ $unit -> unit_name }}</h1>

<p class="lead"> {{ $unit -> unit_code }}</p>

@endsection