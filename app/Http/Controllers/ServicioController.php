<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    public function index()
{
    $servicios = Servicio::all();
    return view('servicios.index', compact('servicios'));
}


    public function create()
    {
        return view('servicios.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $servicio = new Servicio();
    $servicio->nombre = $request->nombre;
    $servicio->descripcion = $request->descripcion;
    $servicio->precio = $request->precio;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('servicios', 'public');
        $servicio->image = $imagePath;
    }

    $servicio->save();

    return redirect()->route('servicios.index')->with('success', 'Servicio agregado exitosamente.');
}
public function edit($id)
{
    $servicio = Servicio::findOrFail($id);
    return view('servicios.edit', compact('servicio'));
}




public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'precio' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $servicio = Servicio::findOrFail($id);
    $servicio->nombre = $request->nombre;
    $servicio->descripcion = $request->descripcion;
    $servicio->precio = $request->precio;

    if ($request->hasFile('image')) {
        // Elimina la imagen antigua si existe
        if ($servicio->image) {
            Storage::disk('public')->delete($servicio->image);
        }
        $imagePath = $request->file('image')->store('servicios', 'public');
        $servicio->image = $imagePath;
    }

    $servicio->save();

    return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente.');
}

public function destroy($id)
{
    $servicio = Servicio::findOrFail($id);

    // Elimina la imagen si existe
    if ($servicio->image) {
        Storage::disk('public')->delete($servicio->image);
    }

    $servicio->delete();

    return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente.');
}

}

