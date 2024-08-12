<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index()
    {
        // Obtener todas las reservas
        $reservas = Reserva::all();

        // Pasar las reservas a la vista
        return view('reservas.index', compact('reservas'));
    }
    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'correo' => 'required|email',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.create')->with('success', 'Reserva creada exitosamente.');
    }
    public function edit($id)
    {
        // Encontrar la reserva por su ID
        $reserva = Reserva::findOrFail($id);

        // Retornar la vista de edición con la reserva
        return view('reservas.edit', compact('reserva'));
    }
    public function destroy($id)
{
    // Encuentra la reserva por ID
    $reserva = Reserva::findOrFail($id);

    // Elimina la reserva
    $reserva->delete();

    // Redirige con un mensaje de éxito
    return redirect()->route('reservas.index')->with('success', 'Reserva eliminada con éxito.');
}

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);

        // Encontrar la reserva por su ID
        $reserva = Reserva::findOrFail($id);

        // Actualizar los datos de la reserva
        $reserva->update($validatedData);

        // Redirigir con un mensaje de éxito
        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada exitosamente.');
    }
}
