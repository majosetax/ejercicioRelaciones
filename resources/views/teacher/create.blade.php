@extends('layouts.layout')

@section('title', 'teacher')
    
@section('content')

    
    <h4>Teacher Create</h4>
        <form action="{{route('teacher.store')}}" method="POST">
            @csrf

      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        <label for="name">Ingrese el nombre</label>
        <br>
    </div>
    <div class="form-floating">
        <input type="text" name="cell_phone" class="form-control" id="cell_phone" placeholder="Telefono">
        <label for="cell_phone">Ingrese el telefono</label>
        <br>
    </div>
    <div class="form-floating">
        <input type="text" name="address" class="form-control" id="address" placeholder="address">
        <label for="address">Ingrese la direccion</label>
       <br>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
        
        @endsection