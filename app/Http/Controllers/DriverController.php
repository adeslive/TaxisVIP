<?php

namespace App\Http\Controllers;

use App\User;
use App\Driver;
use App\Person;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        $choferes = Driver::paginate(5);   
        return view('choferes.choferes', ['choferes' => $choferes]);
    }

    public function activos()
    {
        $choferes = Driver::where('status', '=', '1')->paginate(5);

        return view('choferes.activos', ['choferes' => $choferes]);
    }


    public function inactivos()
    {
        $choferes = Driver::where('status', '=', '0')->paginate(5);

        return view('choferes.inactivos', ['choferes' => $choferes]);
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
        return view('choferes.agregarChofer', ['zones' => $zones]);
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
            'identity' => 'required|numeric|unique:users',
            'license' => 'required|string|unique:drivers,license',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone'
        ]);

        $datos = $request->except(['_token', '_method']);
        $datos['password'] = password_hash($datos['license'], PASSWORD_DEFAULT);
        $datos['access_level'] = 3;

        $user = new User($datos);
        $user->save();

        $datos['users_id'] = $user->id;
        
        if($request->hasFile('photo')) {
            $datos['photo'] = $request->file('photo')->store('uploads', 'public');
        }

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
        $datos['chofer'] = Driver::findOrFail($id);
        $datos['zones'] = DB::table('zones')->select('*')->get();
        $datos['route'] = route('modificarChoferAccion', $id);

        return view('choferes.editarChofer', $datos);
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
        $user = User::findOrFail($chofer->person->id);

        $request->validate([
            'email' => ['required', 'email', Rule::unique('users')->ignore($user)],
            'phone' => ['required', Rule::unique('users', 'phone')->ignore($user)]
        ]);

        if($request->hasFile('photo')) {
            $chofer->photo = $request->file('photo')->store('uploads', 'public');
        }

        $chofer->zones_id = $request->zones_id;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();
        $chofer->save();

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
