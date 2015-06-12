@extends('layouts.master')
@section('header')
    <h2>
        {{ $breed->name }}
    </h2>
    <a href="{{ url('breed/' . $breed->id . '/edit') }}">Edit</a>
    <a href="{{ url('breed/' . $breed->id . '/delete') }}">Delete</a>
    <p>Created at: {{ $breed->created_at }}</p>
    <p>Last Edited: {{ $breed->updated_at->diffForHumans() }}</p>
@stop

@section('content')
    <dl style="clear:left;">
        <dd style='float:left;'>Attribute: </dd><dt>{{ $breed->attribute or 'no data' }}</dt>
    </dl>
    
@stop