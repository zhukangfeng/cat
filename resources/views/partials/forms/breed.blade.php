<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('attribute', "Attribute") !!}
    <div class="form-controls">
        {!! Form::textarea('attribute', null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::submit('Save Breed', ['class' => 'btn btn-primary center-block']) !!}