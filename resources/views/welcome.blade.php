@extends('app')

@section('content')

<a href='/add'>Добавить</a>

@if(count($addressBook) > 0)
<table class="table">
    @foreach($addressBook as $record)
    <tr>
        <td>{{$record->name}}</td>
        <td>{{$record->address}}</td>
        <td>{{$record->mail}}</td>
        <td>{{$record->appointment}}</td>
        <td>{{$record->phone}}</td>   
        <td><a href="/edit/{{$record->id}}">Редактировать</a></td>
        <td><a href="/del/{{$record->id}}">Удалить</a></td>
    </tr>
    @endforeach
</table>
@endif

@stop