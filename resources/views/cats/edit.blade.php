@extends('layouts.master')
@section('header')
    <h2>Edit a cat</h2>
@stop

@section('content')
    {!! Form::model($cat, ['url' => '/cat/'. $cat->id, 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
        @include('partials.forms.cat')
    {!! Form::close() !!}
@stop