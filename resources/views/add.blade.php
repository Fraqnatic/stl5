@extends('app')

@section('content')

{!! Form::open(['url' => 'add']) !!}

<h1>Добавить контакт</h1>
<hr/>
    <div class="form-group">
    {!! Form::label('name', "Имя:")!!}
    {!! Form::text('name', null, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
    {!! Form::label('address', "Адрес:")!!}
    {!! Form::text('address', null, ['class' => 'form-control'])!!}
    </div>
    
    <div class="form-group">
    {!! Form::label('mail', "Электронная почта:")!!}
    {!! Form::text('mail', null, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
    {!! Form::label('appointment', "Должность:")!!}
    {!! Form::text('appointment', null, ['class' => 'form-control'])!!}
    </div>
    
    <div class="form-group">
    {!! Form::label('phone', "Мобильный телефон:")!!}
    {!! Form::text('phone', null, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add contact', ['class' => 'btn btn-primary form-control']) !!}
    </div>

{!! Form::close() !!}

@stop