<div class="form-group">
    {!! Form::label('title', 'Tournament Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('date', 'Date of Tournament:') !!}
    {!! Form::input('date', 'date', date('m/d/Y'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('events', 'Super Smash Bros. Melee') !!}
    {!! Form::checkbox('events', 'Super Smash Bros. Melee') !!}
    <br>
    {!! Form::label('events', 'Super Smash Bros. Project M') !!}
    {!! Form::checkbox('events', 'Super Smash Bros. Project M') !!}
    <br>
    {!! Form::label('events', 'Super Smash Bros. Wii U') !!}
    {!! Form::checkbox('events', 'Super Smash Bros. Wii U') !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>