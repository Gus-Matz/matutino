@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <div class="jumbotron text-center" style="margin-bottom:0">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h1>MOCHILAS MARCA ACME</h1>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="container" style="margin-top:30px">
                            <div class="row">

                                <div class="col-sm-4">
                                    <h2>...</h2>
                                    <h5>...</h5>
                                    <div class="fakeimg">
                                        Imagen
                                    </div>
                                    <p>...</p>
                                    <h3>Links</h3>
                                    <p>...</p>

                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                        </li>
                                    </ul>

                                    <hr class="d-sm-none">

                                </div>

                                <div class="col-sm-8">
                                    <h2>TITULO</h2>
                                    <h5>Descripcion, Fecha</h5>
                                    <div class="fakeimg">
                                        Imagen
                                    </div>
                                    <p>...</p>
                                    <p>...</p>
                                    <br>
                                    <h2>TITULO</h2>
                                    <h5>Descripcion, Fecha</h5>
                                    <div class="fakeimg">
                                        Imagen
                                    </div>
                                    <p>...</p>
                                    <p>...</p>
                                </div>

                            </div>
                        </div>

                        <div class="jumbotron text-center" style="margin-bottom:0">
                            <div class="row">

                                <div class="col">
                                    <button type="button" class="btn btn-outline-primary">
                                        <i class="fab fa-facebook-square"></i>
                                    </button>
                                </div>

                                <div class="col">
                                    <button type="button" class="btn btn-outline-info">
                                        <i class="fab fa-twitter-square"></i>
                                    </button>
                                </div>

                                <div class="col">
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="fab fa-youtube-square"></i>
                                    </button>
                                </div>

                                <div class="col">
                                    <button type="button" class="btn btn-outline-warning">
                                        <i class="fab fa-snapchat-square"></i>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
