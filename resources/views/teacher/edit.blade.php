@extends('layouts.layout')

@section('title', 'teacher')
    
@section('content')

<h4>Teacher Edit</h4>
<form action="{{route('teacher.update',$teacher)}}" method="POST">
    @csrf
    @method('put')

<div class="form-floating">
<input type="text" name="name" class="form-control" id="name" placeholder="name"
value="{{old('Name:',$teacher->name)}}">
<label for="name">Ingrese el nombre</label>
<br>
</div>
<div class="form-floating">
<input type="text" name="cell_phone" class="form-control" id="cell_phone" placeholder="cell_phone"
value="{{old('cell_phone:',$teacher->cell_phone)}}">
<label for="cell_phone">Ingrese el telefono</label>
<br>
</div>
<div class="form-floating">
<input type="text" name="address" class="form-control" id="address" placeholder="address"
value="{{old('address:',$teacher->address)}}">
<label for="address">Ingrese el id usuario</label>
<br>
<button type="submit" class="btn btn-outline-success">Guardar</button>

@endsection