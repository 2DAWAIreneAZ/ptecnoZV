<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class PaginaController extends Controller {

    private $pisos = [
        ['id'=>1, 'nombre'=>'Piso Centro', 'direccion'=>'Calle Mayor 10', 'precio'=>120000, 'metros'=>90],
        ['id'=>2, 'nombre'=>'Ático Sol', 'direccion'=>'Plaza del Sol 3', 'precio'=>200000, 'metros'=>120],
        ['id'=>3, 'nombre'=>'Piso Familiar', 'direccion'=>'Av. Libertad 45', 'precio'=>150000, 'metros'=>100],
        ['id'=>4, 'nombre'=>'Estudio Económico', 'direccion'=>'C/ Luna 7', 'precio'=>80000, 'metros'=>45],
        ['id'=>5, 'nombre'=>'Dúplex Lujo', 'direccion'=>'C/ Serrano 99', 'precio'=>350000, 'metros'=>160],
    ];

    function index(): View {
        return view('tecnoZV.index', ['pisos' => $this->pisos]);
    }

    function show($id): View {
        $piso = collect($this->pisos)->firstWhere('id', $id);
        return view('tecnoZV.show', ['piso' => $piso]);
    }

    function atencion(): View {
        return view('tecnoZV.atencion');
    }

    function contacto(): View {
        return view('tecnoZV.contacto');
    }
}
