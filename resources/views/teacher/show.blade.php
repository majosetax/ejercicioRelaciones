@extends('layouts.layout')

@section('title', 'teacher')
    
@section('content')


<table class="table table-bordered">
    <h4>Teacher Show</h4>
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
    </tr>
    </thead>
    <tbody>
    <tr>   
        @if(isset($teacher))
        <td>{{$teacher->id}}</td>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->cell_phone}}</td>
        <td>{{$teacher->address}}</td>
    </tr>
    @else
    @endif
    </tbody>
</table>


@endsection