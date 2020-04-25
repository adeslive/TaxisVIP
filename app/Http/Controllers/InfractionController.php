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
    public function index()
    {
        return view('choferes.multa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        validator(['id' => $id],
        [
            'id' => 'exists:drivers'
        ])->validate();
        
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
        validator(['id' => $id],
        [
            'id' => 'exists:drivers,id'
        ])->validate();

        $datos = $request->except('_token');
        $datos = $request->validate([
            'infractions' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $datos['drivers_id'] = $id;
        Infraction::insert($datos);
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
