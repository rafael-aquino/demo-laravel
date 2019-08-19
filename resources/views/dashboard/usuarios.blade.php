@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">Dashboard - <a href="/home">VER PRODUCTOS</a></div>
            <div class="row">
                    <div class="col">
                        <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Social Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{$usuario->id}}</th>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                @if($usuario->provider != null)
                                    <td>{{$usuario->provider}}</td>
                                @else
                                    <td>------</td> 
                                @endif
                                
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>            
            </div>
    </div>

</div>
@endsection
