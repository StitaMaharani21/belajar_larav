@extends('layouts.web')

@section('title', 'About')

@section('content')
@php
    $name = "Halo";
@endphp

<h1>About Page {{$name}}</h1>
@endsection