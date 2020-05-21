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
                                ->join('drivers','persons.id','=','drivers.persons_id')
                                ->join('zones','drivers.zones_id','=','zones.id')
                                ->select('persons.*', 'zones.zones', 'drivers.status', 'drivers.id as idchofer')
                                ->paginate(5);
    
        $datos['autos'] = DB::table('vehicles')->get();
   
        return view('choferes.choferes', $datos);
    }

    public function activos()
    {
        $datos['choferes'] = DB::table('persons')
                                ->join('drivers','persons.id','=','drivers.persons_id')
                                ->join('zones','drivers.zones_id','=','zones.id')
                                ->select('persons.name', 'persons.lastname', 'persons.phone', 'zones.zones', 'drivers.*')
                                ->where('status', '=', '1')
                                ->paginate(5);

        $datos['autos'] = DB::table('vehicles')
                            ->where('designated', '1')
                            ->get();

        return view('choferes.activos', $datos);
    }


    public function inactivos()
    {
        $datos['choferes'] = DB::table('persons')
                                ->join('drivers','persons.id','=','drivers.persons_id')
                                ->join('zones','drivers.zones_id','=','zones.id')
                                ->select('persons.name', 'persons.lastname', 'persons.phone', 'zones.zones', 'drivers.*')
                                ->where('status', '=', '0')
                                ->paginate(5);

        $datos['autos'] = DB::table('vehicles')
                            ->where('designated', '1')
                            ->get();

        return view('choferes.inactivos', $datos);
    }

    public function activar($id)
    {
        $chofer = Driver::findOrFail($id);
        $chofer->status = 1;
        $chofer->save();

        return redirect()->back();
    }

    public function inactivar($id)
    {
        $chofer = Driver::findOrFail($id);
        $chofer->status = 0;
        $chofer->save();

        return redirect()->back();
    }

    public function encarrera(){
        $choferes = Driver::where('careerstatus', '=', '1')->get();
        return view('choferes.encarrera', ['drivers' => $choferes]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = DB::table('zones')->select('*')->get();
        $route = route('crearChoferAccion');

        return view('choferes.agregarChofer', ['zones' => $zones, 'route' => $route]);
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
            'identity' => 'required|numeric|unique:persons',
            'mail' => 'required|email|unique:persons,mail',
            'phone' => 'required|unique:persons,phone'
        ]);

        $datos = $request->except(['_token', '_method']);

        $persona = new Person($datos);
        $persona->save();

        $datos['persons_id'] = $persona->id;
        
        $chofer = new Driver($datos);
        $chofer->save();

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Driver::findOrFail($id);

        $datos['chofer'] = DB::table('persons')
                                    ->join('drivers','persons.id','=','drivers.persons_id')
                                    ->join('zones','drivers.zones_id','=','zones.id')
                                    ->select('persons.*', 'zones.zones', 'drivers.status', 'drivers.zones_id')
                                    ->where('drivers.id','=', $id)
                                    ->get();
        $datos['zones'] = DB::table('zones')->select('*')->get();

        $datos['route'] = route('modificarChoferAccion', $id);

        return view('choferes.agregarChofer', $datos);
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
        
        $chofer = Driver::findOrFail($id);
        $chofer->license = $request->license;
        $chofer->zones_id = $request->zones_id;
        $chofer->save();

        $persona = Person::findOrFail($chofer->persons_id);

        $persona->name = $request->name;
        $persona->lastname = $request->lastname;
        $persona->mail = $request->mail;
        $persona->phone = $request->phone;
        $persona->identity = $request->identity;

        $persona->save();

        return redirect()->back();
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
