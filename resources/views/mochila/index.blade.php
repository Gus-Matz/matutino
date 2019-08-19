@extends('layouts.layout')
@section('titulo','LISTA DE MOCHILAS')
@section('content')

<div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-body"> 
                    <div class="pull-right">
                        <a href="{{ url('/agregar') }}" class="btn btn-info" >Añadir Libro</a>
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
                                        <a class="btn btn-success btn-xs" href="">
                                        <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                        
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


<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<script src="{{asset('/js/bootstrap.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('/js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('/js/poppers.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html-->