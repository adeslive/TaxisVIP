<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['choferes'] = DB::table('persons')
                                ->join('drivers','persons.id','=','drivers.id')
                                ->join('zones','drivers.zones_id','=','zones.id')
                                ->select('persons.*', 'zones.zones', 'drivers.status')
                                ->get();
    
        $datos['autos'] = DB::table('vehicles')
                            ->select('*')
                            ->get();
    
        return view('choferes.choferes', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = DB::table('zones')->select('*')->get();
        return view('choferes.agregarChofer', ['zonas' => $zonas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = $request->validate([
            'mail' => 'email|unique:persons,mail',
            'phone' => 'required|unique:persons,phone'
        ]);

        $datosChofer = $request->except('_token');

        $id = DB::table('persons')->insertGetId([
            'name' => $datosChofer['name'],
            'lastname' => $datosChofer['lastname'],
            'identity' => $datosChofer['identity'],
            'phone' => $datosChofer['phone'],
            'mail' => $datosChofer['mail'],
        ]);

        Driver::insert(['status' => 0, 'persons_id' => $id, 'zones_id' => $datosChofer['zone']]);

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
        $datos['choferes'] = DB::table('persons')
            ->join('drivers','persons.id','=','drivers.id')
            ->join('zones','drivers.zones_id','=','zones.id')
            ->select('persons.*', 'zones.zones', 'drivers.status')
            ->get();

        
        $datos['autos'] = DB::table('vehicles')
            ->select('*')
            ->get();

        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
