<?php

namespace App\Http\Controllers;

//use Illuminate\Queue\SerializesModels;
use App\Driver;
use App\Person;
use App\Order;
use App\Customer;
use Illuminate\Http\Request;

class DriverMovilController extends Controller
{
    public function index(){
            $Driver = Driver::findOrFail(2);
            $person_id = $Driver->persons_id;
            $Person = Person::findOrFail($person_id);
        return view('choferesMovil.choferesMovil',['Driver' => $Driver],['Person' => $Person]);
    }

    public function newCarreer($driver_id){
            $Driver = Driver::findOrFail($driver_id);
            $person_id = $Driver->persons_id;
            $Person = Person::findOrFail($person_id);
            $Order = Order::where('drivers_id', $driver_id)->where('status', '=', 1)->firstOrFail();
            $customer_id = $Order->customers_id;
            $Customer = Customer::findOrFail($customer_id);
            $Customer_ = Person::where('id', $Customer->persons_id)->firstOrFail();
        return view('choferesMovil.nuevaCarrera',['Person' => $Person, 'Driver' => $Driver, 'Order' => $Order, 'Customer' => $Customer_]);
    }

       public function finishCarreer($order_id) {
            $Order = Order::findOrFail($order_id);
            $Order->status = 0;
            $Order->save();
        return redirect()->route('choferesMovil');
    }

        public function verifyCarreer($driver_id){
            $Driver = Driver::findOrFail($driver_id);
            $person_id = $Driver->persons_id;
            $Person = Person::findOrFail($person_id);
            $verificar = Order::where('drivers_id', $driver_id)->where('status', '=', 1)->count();
                if ($verificar==1) {
                    return redirect()->route('nuevaCarrera',$Person->id);
                } else {
                    return back()->with('notification','No tiene ninguna carrera disponible');
                }
        }
}
