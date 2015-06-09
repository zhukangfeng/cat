@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>Add a new cat</h2>
@stop

@section('content')
    {!! Form::open(['url' => '/cats']) !!}
        @include('partials.forms.cat')
    {!! Form::close() !!}
@stop