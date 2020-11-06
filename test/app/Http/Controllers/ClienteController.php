<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = App\Cliente::all();
        return view('inicio', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $clienteAgregar = new Cliente;
        $clienteAgregar->nombre = $request->nombre;
        $clienteAgregar->apelllido = $request->apellido;
        $clienteAgregar->dui = $request->dui;
        $clienteAgregar->nit = $request->nit;
        $clienteAgregar->direccion = $request->direccion;
        $clienteAgregar->telefono = $request->telefono;
        $clienteAgregar->celular = $request->celular;
        $clienteAgregar->nota = $request->nota;
        $clienteAgregar->save();
        return back()->with('agregar','El cliente se ha agregado');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clienteActualizar = App\Cliente::findOrFail($id);
        return view('editar', compact('clienteActualizar'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $clienteUpdate= App\cliente::findOrFail($id);
        $clienteUpdate->nombre = $request->nombre;
        $clienteUpdate->apelllido = $request->apellido;
        $clienteUpdate->dui = $request->dui;
        $clienteUpdate->nit = $request->nit;
        $clienteUpdate->direccion = $request->direccion;
        $clienteUpdate->telefono = $request->telefono;
        $clienteUpdate->celular = $request->celular;
        $clienteUpdate->nota = $request->nota;
        $clienteUpdate->save();
        return back()->with('update','El cliente ha sido actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $clienteEliminar = App\cliente::findOrFail($id);
        $clienteEliminar->delete();
        return back()->with('eliminar', 'el cliente se ha eliminado');

    }
}
