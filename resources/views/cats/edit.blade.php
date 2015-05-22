@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>&nbsp;&nbsp;<a href="{{ url('/cat/' . $cat->id) }}">Cancel</a>
    <h2>Edit a cat</h2>
@stop

@section('content')
    {!! Form::model($cat, ['url' => '/cat/'. $cat->id, 'method' => 'put']) !!}
        @include('partials.forms.cat')
    {!! Form::close() !!}
@stop