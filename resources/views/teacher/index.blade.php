@extends('layouts.layout')

@section('title', 'teacher')
    
@section('content')


<table class="table table-bordered">
    <h4>TeacherIndex</h4>
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Mostrar</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($teachers as $teacher)    
    <tr>        
        <td>{{$teacher->id}}</td>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->cell_phone}}</td>
        <td>{{$teacher->address}}</td>
       <td>     <form action="{{route('teacher.show',$teacher->id)}}" method="GET">
                @csrf
                <button type="submit" class="btn btn-outline-info">Mostrar</button>
            </form>
        
        </td>

        <td>     <form action="{{route('teacher.edit',$teacher->id)}}" method="GET">
            @csrf
            <button type="submit" class="btn btn-outline-info">Editar</button>
        </form>
    
    </td>
        <td>
            <form action="{{route('teacher.destroy',$teacher->id)}}" method="POST">
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