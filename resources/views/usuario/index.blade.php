@extends('layout')
@section('contenido')
@php $nro=0;  @endphp
<div class="row no-gutters ">
    <div class="card card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="text-primary">Listado Usuarios</h3>  
            <a href="{{ route('usuario.create')}}" ><button class="btn btn-secondary"><i class="fa fa-plus"></i> Registrar</button></a>        
        </div>

        @if (session()->has('mensaje'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{session('mensaje')}}</strong> 
            </div>
        @endif

        <table id="responsive" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $item)
                <tr>
                    <td>{{$nro=$nro+1}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->apellido}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <span class="badge badge-primary">{{$item->tipo}}</span>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm px-2" href="{{ route('usuario.edit',$item->id)}}"><span class="fas fa-edit"></span></a> 
                        <form style="display: inline" action="{{ route('usuario.destroy',$item->id) }}" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button class="btn btn-danger btn-sm px-2" type="submit"><span class="fas fa-trash"></span></button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach
        
            </tbody>
        </table>       

    </div>
</div>
@endsection