@extends('layouts.master')
@section('header')
    <h2>
        All My Cats
        <a href="{{ url('cat/create') }}" class="btn btn-primary pull-right">Add a new cat</a>&nbsp;&nbsp;
        <a href="{{ url('breeds/create') }}" class="btn btn-primary pull-right">Add a new breed</a>
    </h2>
@stop
@section('content')
    @foreach ($cats as $cat)
        <div class="cat">
            <a href="{{ url('cat/' . $cat->id) }}"><strong>{{ $cat->name }}</strong></a> - 
            @if ($cat->breed)
                <a href="{{ url('breed/' . $cat->breed->id) }}"> {{$cat->breed->name}}</a>
            @endif
    @endforeach
@stop