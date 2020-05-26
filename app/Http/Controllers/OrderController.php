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
        return view('carrera', ['customers' => $customers, 'zones' => $zones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $origin = \App\Colony::find($data['origin']);
        $destination = \App\Colony::find($data['destination']);
        
        if($data['notes'] == null) $data['notes'] = ' ';
        $data['price'] = 15*($data['distance'] + 1);
        $data['origin'] = $origin->zone->zones . ', ' . $origin->colony;
        $data['destination'] = $destination->zone->zones . ', ' . $destination->colony;

        $driver = \App\Driver::where('status', '=', 0)
        ->where('zones_id', '=', $origin->zone->id)
        ->where('careerstatus', '=', 0)
        ->orderBy('mileage', 'ASC')
        ->take(1)
        ->get();

        if(!isset($driver[0])) return redirect()->back()->withErrors(['No hay conductor disponible']);

        $driver[0]->mileage += $data['distance'];
        $driver[0]->careerstatus = 1;

        $data['drivers_id'] = $driver[0]->id;
        $order = new Order($data);

        return dd($data);
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
