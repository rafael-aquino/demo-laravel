<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome')->withProductos(Producto::all());
    }

    public function producto($id){
        return view('producto')->withProducto(Producto::find($id));
    }
}
