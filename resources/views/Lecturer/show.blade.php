@extends('layouts.master')

@section('title','|View Units')

@section('content')


<hr>

<h1>{{ $lecturer -> lect_name }}</h1>

<p class="lead"> {{ $lecturer -> email }}</p>
<p class="lead"> {{ $lecturer -> employNo }}</p>


@endsection