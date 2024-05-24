@extends('layouts.layout')

@section('title', 'module')
    
@section('content')

<table class="table table-bordered">
    <h4>Module Show</h4>
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Id profesor</th>
    </tr>
    </thead>
    <tbody>
    <tr>   
        <td>{{$module->id}}</td>
        <td>{{$module->name}}</td>
        <td>{{$module->teacher->id}}</td>
    </tr>
    </tbody>
</table>


@endsection