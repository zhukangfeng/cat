@extends('layouts.master')
@section('header')
    <h2>Edit a breed</h2>
@stop

@section('content')
    {!! Form::model($breed, ['url' => '/breed/'. $breed->id, 'method' => 'put']) !!}
        @include('partials.forms.breed')
    {!! Form::close() !!}
@stop