@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-12">
                <div class="card uper">
                        <div class="card-header">
                          Editar Producto
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
                            <form method="post" action="{{ route('productos.update', $producto->id) }}">
                                <div class="form-group">
                                    @csrf
                                    @method('PATCH')
                                    <label for="etiqueta">Etiqueta:</label>
                                    <input type="text" class="form-control" name="etiqueta" value="{{$producto->etiqueta}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripci&oacute;n:</label>
                                    <input type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="precio">Precio:</label>
                                    <input type="text" class="form-control" name="precio" value="{{$producto->precio}}"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </form>
                        </div>
                      </div>            
        </div>
    </div>       
@endsection
