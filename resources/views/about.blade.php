@extends('layouts.master')
@section('header')
     <a href="{{ url('/') }}">Back to overview</a>
    <h2> About this site </h2>
@stop
@section('content')
    <div>
        <p>
            There are over <?php echo $number_of_cats; ?> cats on this site!
        </p>
    </div>
@stop