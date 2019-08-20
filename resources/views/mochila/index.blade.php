@extends('layouts.layout')
@section('titulo','LISTA DE MOCHILAS')
@section('content')

<div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-body"> 
                    <div class="pull-right">
                        <!-- a href="{{ url('/agregar') }}" class="btn btn-info" >Añadir Libro</a -->
                    </div>
                    <div class="table-responsive row">
                        <table id="mytable" class="table table-bordred table-striped col-12">
                            <thead class="thead-dark">
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Genero</th>
                            <th>Color</th>
                            <th>Precio</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($mochilas->count())  
                                @foreach($mochilas as $mochila)  
                                <tr>
                                    <td>{{$mochila->modelo}}</td>
                                    <td>{{$mochila->marca}}</td>
                                    <td>{{$mochila->genero}}</td>
                                    <td>{{$mochila->color}}</td>
                                    <td>{{$mochila->precio}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-xs" href="{{route('mochila.show', $mochila->id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-xs" href="{{route('mochila.edit', $mochila->id)}}">
                                        <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('mochila.destroy')}}" method="post">
                                        {{csrf_field()}}
                                        <input name="id" type="hidden" value="{{$mochila->id}}">
                        
                                        <button class="btn btn-danger btn-xs" type="submit">
                                        <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach 
                                @else
                                <tr>
                                    <td colspan="8">No hay registro !!</td>
                                </tr>
                                @endif
                            </tbody>
                            </div>
                        </table>
                    </div>
                </div>
                {{ $mochilas->links() }}
            </div>
        </div>
    @endsection
</div>
