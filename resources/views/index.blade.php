@extends('layouts.master')
@section('header')
    <h2>Welcome</h2>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Cat Website</div>

                <div class="panel-body">
                    <div>
                        <a href="{{ url('cat') }}" class="btn">Cats</a>
                        <a href="{{ url('breeds') }}" class="btn">Breeds</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
