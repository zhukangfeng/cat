@extends('layouts.master')
@section('header')
    <h2>Add a new cat</h2>
@stop

@section('content')
    {!! Form::open(['url' => '/cat', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        @include('partials.forms.cat')
    {!! Form::close() !!}
@stop