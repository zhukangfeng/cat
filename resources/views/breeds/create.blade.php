@extends('layouts.master')
@section('header')
    <h2>Create a new breed</h2>
@stop

@section('content')
    {!! Form::open(['url' => '/breeds']) !!}
        @include('partials.forms.breed')
    {!! Form::close() !!}
@stop