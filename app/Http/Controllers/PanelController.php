<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function index()
    {
        $choferesActivos = Driver::where('status', '=', '1')->get();
        $choferesInactivos = Driver::where('status', '=', '0')->get();
        $choferesEnCarrera = Driver::where('status', '=', '1')->where('careerstatus', '=', '1')->get();

        return view('panel', ['choferesActivos' => $choferesActivos, 'choferesInactivos' => $choferesInactivos, 'choferesEnCarrera' => $choferesEnCarrera]);
    }
}
