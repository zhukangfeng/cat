<div class="form-group">
    @if (isset($cat) && $cat->icons)
        <div class="icon">
            @foreach($cat->icons as $key => $icon)
                <img src="{{ url('/file/download/' . $icon->id) }}">
            @endforeach
        </div>
    @endif
    {!! Form::label('icon', 'Icon') !!}
    <div class="form-controls">
        {!! Form::file('icon', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('date_of_birth', "Date of Birth") !!}
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
    {!! Form::label('price', "Price") !!}
    <div class="form-controls">
        {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('attribute', "Attribute") !!}
    <div class="form-controls">
        {!! Form::textarea('attribute', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('breed_id', "Breed") !!}
    <div class="form-controls">
        {!! Form::select('breed_id', $breeds, null, ['class' => 'form-control']) !!}
    </div>
</div>
{!! Form::submit('Save Cat', ['class' => 'btn btn-primary center-block']) !!}