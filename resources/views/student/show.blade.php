@extends('layouts.layout')

@section('title', 'student')
    
@section('content')

<table class="table table-bordered">
    <h4>Student Show</h4>
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Id modulo</th>
    </tr>
    </thead>
    <tbody>
    <tr>   
        @if(isset($student))
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->module->id}}</td>
    </tr>
    @else
    @endif
    </tbody>
</table>


@endsection