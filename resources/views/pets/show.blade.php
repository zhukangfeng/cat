@extends('layouts.master')
@section('header')
    <h2>
        {{ $pet->pet_type_name }} - {{ $pet->petInfo()[0]->name }}
    </h2>
    @if ($pet->owner_id === Auth::id())
        <a href="{{ url('diary/' . $pet->id) }}">Diary</a>
        <a href="{{ url('pet/' . $pet->id . '/edit') }}">Edit</a>
        <a href="{{ url('pet/' . $pet->id . '/delete') }}">Delete</a>
    @endif
    <p>Last Edited: {{ $pet->updated_at->diffForHumans() }}</p>
@stop

@section('content')
    <div class="pet-info">
        <div class="photo">
            
        </div>
        <dl style="clear:left;">
            <dd style='float:left;'>Owner: </dd><dt>{{ $pet->owner_name }}</dt>
            <dd style='float:left;'>Feed begin time: </dd><dt>{{ $pet->begin_at }}</dt>
            <dd style='float:left;'>Feed End time: </dd><dt>{{ $pet->end_at }}</dt>
            <dd style='float:left;'>Status: </dd><dt>{{ $pet->status_value }}</dt>
            <dd style='float:left;'>Attribute: </dd><dt>{{ $pet->remark . '' }}</dt>
            <dd style='float:left;'>Create time: </dd><dt>{{ $pet->create_at }}</dt>        
        </dl>  
    </div>
    
@stop