@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>
        {{ $cat->name }}
    </h2>
    <a href="{{ url('cat/' . $cat->id . '/edit') }}">Edit</a>
    <a href="{{ url('cat/' . $cat->id . '/delete') }}">Delete</a>
    <p>Last Edited: {{ $cat->updated_at->diffForHumans() }}</p>
@stop

@section('content')
    <dl style="clear:left;">
        <dd style='float:left;'>Date of Birth: </dd><dt>{{ $cat->date_of_birth or 'no data' }}</dt>
        <dd style='float:left;'>Sex: </dd><dt>{{ $cat->sex or 'no data' }}</dt>
        <dd style='float:left;'>Price: </dd><dt>{{ $cat->price or 'no data' }}</dt>
        <dd style='float:left;'>Attribute: </dd><dt>{{ $cat->attribute or 'no data' }}</dt>
        <dd style='float:left;'>Breed: </dd><dt><a href="{{ url('/breed/' . $cat->breed_id) }}">{{ $cat->breed->name or 'no data' }}</a></dt>
    </dl>
    
@stop