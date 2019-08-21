@extends('layouts.layout')
@section('titulo','AGREGAR ARTICULO')
@section('content')

<div class="row">
		<div class="col-md-12">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-body">					
						<form action="agregar" method="POST" autocomplete="on">
						    @csrf
							<div class="row">
								<div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                        <label for="modelo">Modelo:</label>
										<input type="text" name="modelo" id="modelo" class="form-control input-sm" placeholder="Modelo de la mochila">
									</div>
								</div>
								<div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                        <label for="marca">Marca:</label>
										<select class="form-control" id="marca_id" name="marca_id">
											<option value="0">Seleccione</option>
											@foreach($marcas as $marca)
											<option value="{{$marca->id}}">{{$marca->nombre}}</option>
											@endforeach
										</select>
										<!-- input type="text" name="marca" id="marca" class="form-control input-sm" placeholder="Marca de la mochila" -->
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                    <label for="genero">Genero:</label>
										<select class="form-control" id="genero_id" name="genero_id">
											<option value="0">Seleccione</option>
											@foreach($generos as $genero)
											<option value="{{$genero->id}}">{{$genero->nombre}}</option>
											@endforeach
										</select>
										<!-- input type="text" name="genero" id="genero" class="form-control input-sm" placeholder="Genero de la mochila" -->
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
									<label for="color">Color:</label>
										<select class="form-control" id="color_id" name=color_id>
											<option value="0">Seleccione</option>
											@foreach($colores as $color)
											<option value="{{$color->id}}">{{$color->nombre}}</option>
											@endforeach
										</select>
										<!-- input type="text" name="color" id="color" class="form-control input-sm" placeholder="Color de la mochila" -->
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                    <label for="modelo">Precio:</label>
										<input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="Precio de la mochila">
									</div>
								</div>
							</div>

								<div class="col-xs-12 col-sm-12 col-md-12">
									<button type="submit" class="btn btn-primary">Guardar</button>
									<a href="{{ url('/principal') }}" class="btn btn-danger" >Atras</a>
								</div>

							</div>
						</form>
				</div>

			</div>
		</div>
	@endsection
</div>