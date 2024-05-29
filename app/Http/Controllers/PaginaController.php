<?php

// app/Http/Controllers/PaginaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function cultura()
    {
        return view('cultura');
    }

    public function pontturisticos()
    {
        return view('pontturisticos');
    }
    
    public function historia(){
        return view('historia');
    }
    public function formulario(){
        return view('formulario');
    }
}
