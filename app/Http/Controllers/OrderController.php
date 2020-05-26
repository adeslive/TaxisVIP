<?php

namespace App\Http\Controllers;

use App\Zone;
use App\Order;
use App\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();
        return view('listaCarreras', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::where('id', '<>', '1')->get();
        $zones = Zone::where('active', '=', '1')->get();
        return view('carreraa', ['customers' => $customers, 'zones' => $zones]);
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
            'distance' => 'numeric|min:1'
        ]);
        $data = $request->except('_token');
        $data['price'] = 15*(round($data['distance'])+ 1);
        
        $origins = explode(' ', explode(',', $data['origin'])[0]);
        $destinations = explode(' ', explode(',', $data['destination'])[0]);
        $selectedOrigin = -1;
        $selectedDestination = -1;
        $zones = \App\Zone::where('active', '=', 1)->get();

        foreach($origins as $origin){
            foreach($zones as $zone) {
                if (strpos(strtolower($origin), strtolower($zone->zones)) !== false) {
                    $selectedOrigin = $zone->id;
                }else{
                    foreach($zone->colonies as $colony) {
                        if (strpos(strtolower($origin), strtolower($colony->colony)) !== false) {
                            $selectedOrigin = $colony->zone->id;
                        }
                    }
                }
            }
        }

        if($selectedOrigin == -1) return redirect()->back()->withErrors(["No hay servicio en esa zona de Origen"]);

        foreach($destinations as $destination){
            foreach($zones as $zone) {
                if (strpos(strtolower($destination), strtolower($zone->zones)) !== false) {
                    $selectedDestination = $zone->id;
                }else{
                    foreach($zone->colonies as $colony) {
                        if (strpos(strtolower($destination), strtolower($colony->colony)) !== false) {
                            $selectedDestination = $colony->zone->id;
                        }
                    }
                }
            }
        }

        if($selectedDestination == -1) return redirect()->back()->withErrors(['No hay servicio en esa zona de Destino']);

        $driver = \App\Driver::where('status', '=', 1)
        ->where('zones_id', '=', $selectedOrigin)
        ->where('careerstatus', '=', 0)
        ->orderBy('mileage', 'ASC')
        ->take(1)
        ->get();

        if(!isset($driver[0])) return redirect()->back()->withErrors(['No hay conductores disponibles para esa zona']);

        $driver[0]->mileage += $data['distance'];
        $driver[0]->careerstatus = 1;

        $data['drivers_id'] = $driver[0]->id;
        $order = new Order($data);
        $order->status = 2;
        $order->save();
        $driver[0]->save();
        return redirect()->back()->with('notification', 'Carrera realizada');
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
    public function update(Request $request, $id, $value)
    {
        $order = Order::findOrFail($id);
        $order->status = $value;
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
        $order = Order::findOrFail($id);
        $order->status = 0;
        return redirect()->back();
    }
}
