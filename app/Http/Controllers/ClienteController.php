<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombres' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'correo' => 'required|email|unique:clientes,correo',
        'password' => 'required|string|min:8',
    ]);

    Cliente::create([
        'nombres' => $request->nombres,
        'apellidos' => $request->apellidos,
        'correo' => $request->correo,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('clientes.index')->with('success', 'Cliente registrado exitosamente.');
}

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:clientes,correo,' . $cliente->id,
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
