@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - <a href="/usuarios">VER USUARIOS</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>My name: {{Auth::user()->name}}</p>
                    <p>My Email: {{Auth::user()->email}}</p>
                    <img style="width:7%; height:auto;" alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Etiqueta</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{$producto->etiqueta}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <a href="/productos/{{$producto->id}}/edit">EDITAR</a>
                    </td>
                    <td>
                        <form method="post" action="/productos/{{$producto->id}}">
                            @csrf
                            @method('DELETE')
                            
                            <input type="submit" class="btn btn-danger" value="X">
                        </form>                        
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

    <div class="row">
            <div class="col-md-12">
                    <div class="card uper">
                            <div class="card-header">
                                Crear Producto
                            </div>
                            <div class="card-body">
                              @if ($errors->any())
                                <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                                </div><br />
                              @endif
                                <form method="post" action="{{ route('productos.store') }}">
                                    <div class="form-group">
                                        @csrf
                                        <label for="etiqueta">Etiqueta:</label>
                                        <input type="text" class="form-control" name="etiqueta"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripci&oacute;n:</label>
                                        <input type="text" class="form-control" name="descripcion"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="precio">Precio:</label>
                                        <input type="text" class="form-control" name="precio"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </form>
                            </div>
                          </div>            
            </div>
    </div> 
</div>
@endsection
