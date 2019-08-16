@extends('layouts.layout')
@section('content')

<div class="row">
	<section class="content">
		<div class="col-md-6 col-md-offset-2">
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
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Articulo</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form action="agregar" method="POST" autocomplete="on">
						    @csrf
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <label for="modelo">Modelo:</label>
										<input type="text" name="modelo" id="modelo" class="form-control input-sm" placeholder="Modelo del libro">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <label for="marca">Marca:</label>
										<input type="text" name="marca" id="marca" class="form-control input-sm" placeholder="Marca del libro">
									</div>
								</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                    <label for="genero">Genero:</label>
										<input type="text" name="genero" id="genero" class="form-control input-sm" placeholder="Genero del libro">
									</div>
								</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                        <label for="color">Color:</label>
										<input type="text" name="color" id="color" class="form-control input-sm" placeholder="Color del libro">
									</div>
								</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
                                    <label for="modelo">Precio:</label>
										<input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="Precio del libro">
									</div>
								</div>
							</div>

								<div class="col-xs-12 col-sm-12 col-md-12">
									<button type="submint" class="btn btn-primary">Guardar<button>
								</div>

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
</div>