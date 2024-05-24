@extends('layouts.layout')

@section('title', 'module')
    
@section('content')

<table  class="table table-bordered">
    <h4>Module Index</h4>
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Id profesor</th>
        <th>Mostrar</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($modules as $module)    
    <tr>        
        <td>{{$module->id}}</td>
        <td>{{$module->name}}</td>
        <td>{{$module->teacher->id}}</td>
       <td>     <form action="{{route('module.show',$module->id)}}" method="GET">
                @csrf
                <button type="submit" class="btn btn-outline-info">Mostrar</button>
            </form>
        
        </td>

        <td>     <form action="{{route('module.edit',$module->id)}}" method="GET">
            @csrf
            <button type="submit" class="btn btn-outline-info">Editar</button>
        </form>
    
    </td>
        <td>
            <form action="{{route('module.destroy',$module->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection