@extends('layouts.layout')
@section('titulo','DETALLES DEL ARTICULO')
@section('content')

<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">					
						<form action="/mostrar/{id}" method="POST" autocomplete="on">
						    @csrf
							<div class="row">
								<div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                        <label for="modelo">Modelo:</label>
										<input type="text" name="modelo" id="modelo" class="form-control input-sm" value="{{$mochila->modelo}}" disabled>
									</div>
								</div>
								<div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                        <label for="marca">Marca:</label>
										<input type="text" name="marca_id" id="marca_id" class="form-control input-sm" value="{{$mochila->marca->nombre}}"  disabled>
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                    <label for="genero">Genero:</label>
										<input type="text" name="genero_id" id="genero_id" class="form-control input-sm" value="{{$mochila->genero->nombre}}" disabled>
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                        <label for="color">Color:</label>
										<input type="text" name="color_id" id="color_id" class="form-control input-sm" value="{{$mochila->color->nombre}}" disabled>
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                    <label for="precio">Precio:</label>
										<input type="text" name="precio_id" id="precio" class="form-control input-sm" value="{{$mochila->precio}}" disabled>
									</div>
								</div>
							</div>

								<div class="col-xs-12 col-sm-12 col-md-12">
									<a href="{{ url('/principal') }}" class="btn btn-success" >Atras</a>
								</div>

							</div>
						</form>
				</div>

			</div>
		</div>
	@endsection
</div>