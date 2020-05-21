<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function index()
    {
        $choferesActivos = DB::table('persons')
            ->join('drivers', 'persons.id', '=', 'drivers.persons_id')
            ->select('persons.name', 'persons.lastname')
            ->where('status', '=', '1')
            ->get();

        $choferesInactivos = DB::table('persons')
            ->join('drivers', 'persons.id', '=', 'drivers.persons_id')
            ->select('persons.name', 'persons.lastname')
            ->where('status', '=', '0')
            ->get();

        $choferesEnCarrera = DB::table('persons')
            ->join('drivers', 'persons.id', '=', 'drivers.persons_id')
            ->select('persons.name', 'persons.lastname')
            ->where('status', '=', '0')
            ->where('careerstatus', '=', '1')
            ->get();

        return view('panel', ['choferesActivos' => $choferesActivos, 'choferesInactivos' => $choferesInactivos, 'choferesEnCarrera' => $choferesEnCarrera]);
    }
}
