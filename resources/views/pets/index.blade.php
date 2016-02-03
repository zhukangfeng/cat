@extends('layouts.master')
@section('header')
    <h2>
        All @if (isset(Auth::user()->name)) {{ Auth::user()->name }} @endif's Pets
        <a href="{{ url('pets/create') }}" class="btn btn-primary pull-right">Add a new pet</a>&nbsp;&nbsp;
        {{-- <a href="{{ url('breeds/create') }}" class="btn btn-primary pull-right">Add a new breed</a> --}}
    </h2>
@stop
@section('content')
    {{$pet_type = $pets[0]->pet_type}}
    <div class="pets">
        <h3>{{ $pets[0]->pet_type_name }}</h3>
        @foreach ($pets as $pet)
            @if ($pet->petInfo())
                @if ($pet->pet_type !== $pet_type)
                    {{$pet_type = $pet->pet_type}}
                    <div>
                    <div class="pets">
                        <h3>{{ $pet->pet_type_name }}</h3>
                @endif
                    <div class="pet-info">
                        <a href="{{ url('pet/' . $pet->id) }}"><strong>{{ $pet->petInfo()[0]->name }}</strong></a> - 
                        @if ($pet->petInfo()[0]->breed && $pet->petInfo()[0]->breed->name)
                            <a href="{{ url('breed/' . $pet->petInfo()[0]->breed->id) }}"> {{$pet->petInfo()[0]->breed->name}}</a>
                        @endif
                    </div>
            @endif
        @endforeach
    <div>
@stop