<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('begin_at', "Own") !!}
    <div class="form-controls">
        {!! Form::date('date_of_birth', null, ['class' => 'form-control span2']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('end_at', "Date of Birth") !!}
    <div class="form-controls">
        {!! Form::date('date_of_birth', null, ['class' => 'form-control span2']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('sex', "Sex") !!}
    <div class="form-controls">
        {!! Form::radio('sex', 'male', true, ['id' => 'male', 'class' => 'sex_radio']) !!}
        {!! Form::label('male', "Male") !!}
        {!! Form::radio('sex', 'female', null, ['id' => 'female', 'class' => 'sex-radio']) !!}
        {!! Form::label('female', "Female") !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('attribute', "Attribute") !!}
    <div class="form-controls">
        {!! Form::textarea('attribute', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('cat_id', "Cat") !!}
    <div class="form-controls">
        {!! Form::select('cat_id', $cats, null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::submit('Save Breed', ['class' => 'btn btn-primary center-block']) !!}