<?php

namespace App\Http\Controllers;

//use Illuminate\Queue\SerializesModels;
use App\Driver;
use App\Person;
use App\Order;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverMovilController extends Controller
{
    public function index()
    {
        $Driver = Driver::where('users_id', '=', Auth::user()->id)->get();

        return view('choferesMovil.choferesMovil', ['Driver' => $Driver[0]]);
    }

    public function newCarreer($driver_id)
    {
        $Driver = Driver::where('users_id', '=', Auth::user()->id)->get()[0];
        $Order = Order::where('drivers_id', $driver_id)->where('status', '<>', 0)->firstOrFail();
        $customer_id = $Order->customers_id;
        $Customer = Customer::findOrFail($customer_id);
        return view('choferesMovil.nuevaCarrera', ['Driver' => $Driver, 'Order' => $Order, 'Customer' => $Customer]);
    }

    public function finishCarreer($order_id)
    {
        $Order = Order::findOrFail($order_id);
        $Order->status = 0;
        $Order->save();
        $Driver = Driver::where('users_id', '=', Auth::user()->id)->get()[0];
        $Driver->carreerstatus = 0;
        $Driver->save();
        return redirect()->route('choferesMovil');
    }

    public function inVehicle($order_id)
    {
        $Order = Order::findOrFail($order_id);
        $Order->status = 1;
        $Order->save();
        return redirect()->back();
    }

    public function verifyCarreer($driver_id)
    {
        $Driver = Driver::where('users_id', '=', Auth::user()->id)->get()[0];
        $verificar = Order::where('drivers_id', $Driver->id)->where('status', '<>', 0)->count();
        if ($verificar == 1) {
            return redirect()->route('nuevaCarrera', $Driver->id);
        } else {
            return back()->with('notification', 'No tiene ninguna carrera disponible');
        }
    }
}
