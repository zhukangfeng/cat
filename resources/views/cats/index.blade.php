@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to the overview</a>
    <h2>
        All @if (isset($breed)) {{$breed->name}} @endif Casts<br>
        <a href="{{ url('breeds/') }}" class="btn btn-primary pull-left">Go to breeds</a>
        <a href="{{ url('cats/create') }}" class="btn btn-primary pull-right">Add a new cat</a>&nbsp;&nbsp;
        <a href="{{ url('breeds/create') }}" class="btn btn-primary pull-right">Add a new breed</a>
    </h2>
@section('content')
    @foreach ($cats as $cat)
        <div class="cat">
            <a href="{{ url('cat/' . $cat->id) }}"><strong>{{ $cat->name }}</strong></a> - <a href="{{ url('breed/' . $cat->breed->id) }}"> {{$cat->breed->name}}</a>
        </div>
    @endforeach
@stop