@extends('template.default')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($productos as $producto)
        <div class="col-sm-6 center-block">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    {{$producto->etiqueta}}
                </div>
                <img src="https://picsum.photos/id/100/2500/1656" class="card-img-top responsive" alt="...">
                <div class="card-body">
                    <h5 class="card-title">$ {{$producto->precio}}</h5>
                    <p class="card-text">{{$producto->descripcion}}</p>
                    <a href="/producto/{{$producto->id}}" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection