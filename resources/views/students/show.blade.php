@extends('layouts.master')

@section('title','|View Units')

@section('content')


<hr>

<h1>{{ $student -> stud_name }}</h1>

<p class="lead"> {{ $student -> email }}</p>
<p class="lead"> {{ $student -> regNo }}</p>


@endsection