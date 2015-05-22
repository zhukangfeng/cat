@extends('layouts.master')
@section('header')
    @if (isset($breed))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
<h2>
    All @if (isset($breed)) {{$breed->name}} @endif Casts
    <a href="{{ url('cats/create') }}" class="btn btn-primary pull-right">Add a new cat</a>&nbsp;&nbsp;
    <a href="{{ url('breeds/create') }}" class="btn btn-primary pull-right">Add a new breed</a>
</h2>
@section('content')
    @foreach ($cats as $cat)
        <div class="cat">
            <a href="{{ url('cat/' . $cat->id) }}"><strong>{{ $cat->name }}</strong></a> - <a href="{{ url('breeds/' . $cat->breed->id) }}"> {{$cat->breed->name}}</a>
        </div>
    @endforeach
@stop