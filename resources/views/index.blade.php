@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <div>
            <a href="{{route('tasks.create')}}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>
    
    @if(Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}<br>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                   {{$task->due_date}}
                </td>
                <td>
                    @if($task->status == 'Pendiente')
                        <span class="badge bg-primary fs-6">Pendiente</span>
                    @elseif($task->status == 'En progreso')
                        <span class="badge bg-info fs-6">En progreso</span>
                    @elseif($task->status == 'Completada')
                        <span class="badge bg-success fs-6">Completada</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('tasks.edit', $task)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('tasks.destroy', $task)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$tasks->links()}}
    </div>
</div>
@endsection

<!--Sara Sofía Alzate Charry
TCDS
Frameworks NRC: 66988
4to Semestre
Mario Porras-->