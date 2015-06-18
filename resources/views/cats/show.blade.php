@extends('layouts.master')
@section('header')
    <h2>
        {{ $cat->name }}
    </h2>
    @if (!Auth::guest())
        @if ($cat->created_user_id === Auth::id() || Auth::user()->user_type == Config::get('db_const.DB_USERS_USER_TYPE_ADMIN'))
            <a href="{{ url('cat/' . $cat->id . '/edit') }}">Edit</a>
            <a href="javascript:void(0);" id="delete_cat">Delete</a>
        @endif
    @endif
    <form name="formA" method="update" action="">
        <a href="javascript:void(0)" onclick="document.formA.submit();return false;">click here</a>
    </form>
    <p>Last Edited: {{ $cat->updated_at->diffForHumans()}}</p>
@stop

@section('content')
    <dl style="clear:left;">
        <dd style='float:left;'>Date of Birth: </dd><dt>{{ $cat->date_of_birth or 'no data' }}</dt>
        <dd style='float:left;'>Sex: </dd><dt>{{ $cat->sex or 'no data' }}</dt>
        <dd style='float:left;'>Price: </dd><dt>{{ $cat->price or 'no data' }}</dt>
        <dd style='float:left;'>Creator: </dd><dt>{{ $cat->creator or 'no data' }}</dt>
        <dd style='float:left;'>Attribute: </dd><dt>{{ $cat->attribute or 'no data' }}</dt>
        <dd style='float:left;'>Breed: </dd><dt><a href="{{ url('/breed/' . $cat->breed_id) }}">{{ $cat->breed->name or 'no data' }}</a></dt>   
        @foreach ($cat->icons as $key => $icon)
            <dd style='float:left;'>Icon: </dd><dt><img src="{{ url('/file/download/' . $icon->id) }}">{{ $icon->real_name or 'no data' }}</dt>  

        @endforeach 
    </dl>
    
@stop

@section('javascript')
    $(document).ready(function() {
    console.log('a');
        $('edit_cat').click(function() {
            console.log('click');
            var form = $('<from> </from>');
            form.attr('action', '#');
            form.attr('method', 'update');
            form.submit();
        });
    });
@stop