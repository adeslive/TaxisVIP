<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->access_level == 1 || Auth::user()->access_level == 2){
            return redirect(route('panel'));
        }else if(Auth::user()->access_level == 3){
            return redirect(route('choferesMovil'));
        }
    }
}
