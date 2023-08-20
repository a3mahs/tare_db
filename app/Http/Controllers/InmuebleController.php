<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('inmueble_index'), 403);

        $inmuebles = Inmueble::paginate(5);
        return view('inmuebles.index', compact('inmuebles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('inmueble_create'), 403);

        return view('inmuebles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inmueble::create($request->all());

        return redirect()->route('inmuebles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inmueble $inmueble)
    {
        abort_if(Gate::denies('inmueble_show'), 403);

        return view('inmuebles.show', compact('inmueble'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmueble $inmueble)
    {
        abort_if(Gate::denies('inmueble_edit'), 403);

        return view('inmuebles.edit', compact('inmueble'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmueble $inmueble)
    {
        $inmueble->update($request->all());

        return redirect()->route('inmuebles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmueble $inmueble)
    {
        abort_if(Gate::denies('inmueble_destroy'), 403);

        $inmueble->delete();

        return redirect()->route('inmuebles.index')->with('success', 'El registro ha sido eliminado correctamente.');
    }
}
