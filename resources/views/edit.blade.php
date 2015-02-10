@extends('app')

@section('content')

{!! Form::model($record, ['method' => 'PATCH', 
    'action' => 'AddressBookController@update_person']) !!}

<h1>Добавить контакт</h1>
<hr/>
    <div class="form-group">
    {!! Form::label('name', "Имя:")!!}
    {!! Form::text('name', $record->name, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
    {!! Form::label('address', "Адрес:")!!}
    {!! Form::text('address', $record->address, ['class' => 'form-control'])!!}
    </div>
    
    <div class="form-group">
    {!! Form::label('mail', "Электронная почта:")!!}
    {!! Form::text('mail', $record->mail, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
    {!! Form::label('appointment', "Должность:")!!}
    {!! Form::text('appointment', $record->appointment, ['class' => 'form-control'])!!}
    </div>
    
    <div class="form-group">
    {!! Form::label('phone', "Мобильный телефон:")!!}
    {!! Form::text('phone', $record->phone, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update contact', ['class' => 'btn btn-primary form-control']) !!}
    </div>

{!! Form::close() !!}

@stop