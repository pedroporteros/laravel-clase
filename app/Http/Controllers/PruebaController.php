<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){ //principal
        //$nombre = 'pepe';
        //$lista = ['perro','gato','avestruz'];
        $diccionario = [['num' => 'uno'],['num' => 'dos'],['num' => 'tres']];
        return view('auth.login', ['dic' => $diccionario]);//no estamos seguros de si siempre se devuelve
    }

    public function create(){ //el de formularios para crear
        $doce = 12;
        return view('contacto', ['doce' => $doce]);
    }

    public function show(){ //el de mostrar algo
        return view('blog'); 
    }
}
