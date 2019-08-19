@extends('layouts.layout')
@section('titulo','AGREGAR ARTICULO')
@section('content')

<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">					
						<form action="agregar" method="POST" autocomplete="on">
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
										<input type="text" name="marca" id="marca" class="form-control input-sm" value="{{$mochila->marca}}" disabled>
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                    <label for="genero">Genero:</label>
										<input type="text" name="genero" id="genero" class="form-control input-sm" value="{{$mochila->genero}}" disabled>
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                        <label for="color">Color:</label>
										<input type="text" name="color" id="color" class="form-control input-sm" value="{{$mochila->color}}" disabled>
									</div>
								</div>
                                <div class="col-xs-8 col-sm-12 col-md-6">
									<div class="form-group">
                                    <label for="precio">Precio:</label>
										<input type="text" name="precio" id="precio" class="form-control input-sm" value="{{$mochila->precio}}" disabled>
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