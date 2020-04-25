<?php

namespace App\Http\Controllers;

use App\Infraction;
use Illuminate\Http\Request;

class InfractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idchofer)
    {
        $multas = Infraction::where('drivers_id', $idchofer)->orderBy('created_at', 'desc')->get();
        
        return view('choferes.listaMultas', ['multas' => $multas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        \App\Driver::findOrFail($id);
        
        return view('choferes.multa', ['idChofer' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        \App\Driver::findOrFail($id);

        $datos = $request->except('_token');
        $datos = $request->validate([
            'infractions' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $datos['drivers_id'] = $id;
        $multa = new Infraction($datos);
        $multa->save();

        return redirect()->back();
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
    public function destroy($id)
    {
        //
    }
}
