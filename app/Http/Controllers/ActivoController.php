<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activos = Activo::all();
        return view('activos.index', compact('activos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('activos.create');
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
        $activo = new Activo();
         //tabla->columna = $request->imput('nombre del input');
        $activo->numero_serial = $request->input('numeroSerial');
        $activo->numero_serial_dispositivo = $request->input('numeroSerialDispositivo');
        $activo->numero_serial_tecNM = $request->input('numeroSerialTecNM');
        $activo->tipo_activo = $request->input('tipoActivo');
        $activo->nombre_activo = $request->input('nombreActivo');
        $activo->fecha_alta = $request->input('fechaAlta');
        $activo->marca = $request->input('marca');
        $activo->modelo = $request->input('modelo');
        $activo->color = $request->input('color');
        $activo->descripcion = $request->input('descripcion');
        $activo->imagen = $request->input('imagen');
        $activo->codigo_qr = $request->input('codigoQR');
        $activo->tipo_ubicacion = $request->input('tipoUbicacion');
        $activo->nombre_ubicacion = $request->input('nombreUbicacion');
        $activo->tipo_estatus = $request->input('tipoEstatus');
        $activo->save();

        return redirect('/activos')->with('creado', 'Activo creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function show(Activo $activo)
    {
        //
        return view('activos.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function edit(Activo $activo)
    {
        //
        return view('activos.edit', compact('activo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activo $activo)
    {
        //
        $activo = new Activo();
         //tabla->columna = $request->imput('nombre del input');
        $activo->numero_serial = $request->input('numeroSerial');
        $activo->numero_serial_dispositivo = $request->input('numeroSerialDispositivo');
        $activo->numero_serial_tecNM = $request->input('numeroSerialTecNM');
        $activo->tipo_activo = $request->input('tipoActivo');
        $activo->nombre_activo = $request->input('nombreActivo');
        $activo->fecha_alta = $request->input('fechaAlta');
        $activo->marca = $request->input('marca');
        $activo->modelo = $request->input('modelo');
        $activo->color = $request->input('color');
        $activo->descripcion = $request->input('descripcion');
        $activo->imagen = $request->input('imagen');
        $activo->codigo_qr = $request->input('codigoQR');
        $activo->tipo_ubicacion = $request->input('tipoUbicacion');
        $activo->nombre_ubicacion = $request->input('nombreUbicacion');
        $activo->tipo_estatus = $request->input('tipoEstatus');
        $activo->save();

        return redirect('/activos')->with('Actualizar', 'Activo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activo $activo)
    {
        //
        $activo = Activo::findDrFail($activo);
        $activo->delete();
        return redirect('/activos')->with('eliminar', 'Activo se ha eliminado');
    }
}
