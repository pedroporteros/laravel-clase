<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PruebaController extends Controller
{
    public function index() { //principal        
        return view('principal');
    }


    public function create() {
        return view('registro');
    }

    public function show() {
        $usuarios = DB::table('usuario')->get();

        return view('tabla', ['users' => $usuarios]);
    }


}
