@extends('layouts.layout')

@section('title', 'student')
    
@section('content')


<table class="table table-bordered">
    <h4>Student Index</h4>
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Id modulo</th>
        <th>Mostrar</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)    
    <tr>        
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->module->id}}</td>
       <td>     <form action="{{route('student.show',$student->id)}}" method="GET">
                @csrf
                <button type="submit" class="btn btn-outline-info">Mostrar</button>
            </form>
        
        </td>

        <td>     <form action="{{route('student.edit',$student->id)}}" method="GET">
            @csrf
            <button type="submit" class="btn btn-outline-info">Editar</button>
        </form>
    
    </td>
        <td>
            <form action="{{route('student.destroy',$student->id)}}" method="POST">
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