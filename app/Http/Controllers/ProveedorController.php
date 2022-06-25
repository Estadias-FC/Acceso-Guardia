<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index() {
        return view('crud.proveedores');
    }

    public function create()
    {
        return view ('proveedores');
    }

    public function store(Request $request)
    {
        $datosProveedores =request()->except('_token');
        Proveedores::insert($datosProveedores);
        return redirect('home')->with('mensaje','Registrado exitosamente');
    }

    public function show(Proveedores $proveedores)
    {
        //
    }

    public function edit(Proveedores $proveedores)
    {
        //
    }

    public function update(Request $request, Proveedores $proveedores)
    {
        //
    }

    public function destroy(Proveedores $proveedores)
    {
        //
    }
}
