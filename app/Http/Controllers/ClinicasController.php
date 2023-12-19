<?php

namespace App\Http\Controllers;

use App\Models\clinicas;
use Illuminate\Http\Request;

class ClinicasController extends Controller
{
    public function mostrar_usuario()
    {
        $clinicas = clinicas::all();
        return view('contacto', ['clinicas' => $clinicas]);
    }
}
