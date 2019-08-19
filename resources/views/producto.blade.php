@extends('template.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col center-block">
            <h1>{{$producto->etiqueta}}</h1>
            <p>$ {{$producto->precio}}</p>
            <P>{{$producto->descripcion}}</P>
        </div>
    </div>
</div>
@endsection