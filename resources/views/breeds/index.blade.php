@extends('layouts.master')
@section('header')
<h2>
    All Breeds
    <a href="{{ url('cats/create') }}" class="btn btn-primary pull-right">Add a new cat</a>&nbsp;&nbsp;
    <a href="{{ url('breeds/create') }}" class="btn btn-primary pull-right">Add a new breed</a>

</h2>
@stop

@section('content')
    @foreach ($breeds as $breed)
        <div class="breed">
            <a href="{{ url('breed/' . $breed->id) }}"><strong>{{ $breed->name }}</strong></a> - updated at: <label>{{ date("Y/m/d H:i:s", strtotime($breed->updated_at)) }}</label>
        </div>
    @endforeach
@stop