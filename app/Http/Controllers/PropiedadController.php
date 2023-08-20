<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Inmueble;
use App\Models\Documento;
use App\Models\Estado;


class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('propiedad_index'), 403);

        $propiedads = Propiedad::paginate(5);
        $inmuebles = Inmueble::All('categoria_inmueble');
        $documentos = Documento::All('documento_per');
        $estados = Estado::All('estado_propiedad');

        return view('propiedads.index', compact('propiedads', 'inmuebles', 'documentos', 'estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('propiedad_create'), 403);

        $inmuebles = Inmueble::All('id', 'categoria_inmueble');
        $documentos = Documento::All('id', 'documento_per');
        $estados = Estado::All('id', 'estado_propiedad');

        return view('propiedads.create', compact('inmuebles', 'documentos', 'estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Propiedad::create($request->all());
        $input['nota'] = $request->input('nota');

        $request->validate([
            'categoria' => 'required',
            'estado' => 'required',
            'contacto1' => 'required',
            'tipo_documento' => 'required',
            // 'documento' => 'required',
            'ciudad'=> 'required',
            'contacto1_propietario'=>'required',
        ]);

        // if ($v->fails())
        // {
        //     return redirect()->back()->withInput()->withErrors($v->errors());
        // }

        return redirect()->route('propiedads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedad $propiedad)
    {
        abort_if(Gate::denies('propiedad_show'), 403);
        $inmuebles = Inmueble::All('id', 'categoria_inmueble');
        $documentos = Documento::All('id', 'documento_per');
        $estados = Estado::All('id', 'estado_propiedad');

        return view('propiedads.show', compact('propiedad', 'inmuebles', 'documentos', 'estados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Propiedad $propiedad)
    {
        abort_if(Gate::denies('propiedad_edit'), 403);
        $inmuebles = Inmueble::All('id', 'categoria_inmueble');
        $documentos = Documento::All('id', 'documento_per');
        $estados = Estado::All('id', 'estado_propiedad');

        return view('propiedads.edit', compact('propiedad', 'inmuebles', 'documentos', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propiedad $propiedad)
    {
        $propiedad->update($request->all());

        return redirect()->route('propiedads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedad $propiedad)
    {
        abort_if(Gate::denies('propiedad_destroy'), 403);

        $propiedad->delete();

        return redirect()->route('propiedads.index')->with('success', 'El registro ha sido eliminado correctamente.');
    }
}
