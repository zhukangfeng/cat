@extends('layouts.master')
@section('header')
    <h2>
        {{ $user->name }}
    </h2>
    <a href="{{ url('info/edit') }}">Edit</a>
    <a href="{{ url('info/delete') }}">Delete</a>
    <p>Last Edited: {{ $user->updated_at->diffForHumans() }}</p>
@stop

@section('content')
    <dl style="clear:left;">
        <dd style='float:left;'>E-Mail: </dd><dt>{{ $user->email or 'no data' }}</dt>
        <dd style='float:left;'>Created time: </dd><dt>{{ $user->created_at or 'no data' }}</dt>
        <dd style='float:left;'>Update time: </dd><dt>{{ $user->updated_at or 'no data' }}</dt>
    </dl>
    
@stop