<?php

namespace App\Http\Controllers;

use App\Models\Visitantes;
use Illuminate\Http\Request;

class VisitantesController extends Controller
{
    public function index() {
        return view('crud.visitantes');
    }

    public function create()
    {
        return view ('visitantes');
    }

    public function store(Request $request)
    {
        $datosVisitantes =request()->except('_token');
        Visitantes::insert($datosVisitantes);
        return redirect('home')->with('mensaje','Registrado exitosamente');
    }

    public function show(Visitantes $visitantes)
    {
        //
    }

    public function edit(Visitantes $visitantes)
    {
        //
    }

    public function update(Request $request, Visitantes $visitantes)
    {
        //
    }

    public function destroy(Visitantes $visitantes)
    {
        //
    }

}
