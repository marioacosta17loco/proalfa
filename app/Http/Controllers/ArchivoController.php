<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivo;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivos = Archivo::paginate(10);
        return view('archivos.index', compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archivos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required', 'tipoarchivo' => 'required', 'detalles' => 'required', 'fecha' => 'required', 'documento' => 'required|file|mimes:pdf,docx,xlsx|max:10240'
        ]);
        
        $archivos = $request->all();

        if($documento = $request->file('documento')) {
        $archivoProducto = date('YmdHis'). "." . $documento->getClientOriginalExtension();        
        $rutaGuardarArc = 'archivo/';
        $documento->move($rutaGuardarArc, $archivoProducto);
        $doc['documento'] = "$archivoProducto";
        }
        Archivo::create([
            'nombre' => $request->nombre,
            'tipoarchivo' => $request->tipoarchivo,
            'detalles' => $request->detalles,
            'fecha' => $request->fecha,
            'documento' => $archivoProducto
        ]);   


         
    
         return redirect()->route('archivos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        $archivo->delete();
        return redirect()->route('archivos.index');
    }
    
    
    
}
