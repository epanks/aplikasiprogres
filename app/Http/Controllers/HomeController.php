<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Balai;
use App\Satker;

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
        $paket = Paket::all();
        $balai = Balai::all();
        $satker = Satker::all();
        //dd($paket);
        return view('home', compact('paket', 'satker', 'balai'));
    }
}
