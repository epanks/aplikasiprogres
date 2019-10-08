<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balai;
use App\Satker;

class BalaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_balai = Balai::where('nmbalai', 'LIKE', '%' . $request->cari . '%')->paginate(16);
        } else {
            $data_balai = Balai::paginate(16);
        }
        return view('balai.index', compact('data_balai'));
    }

    public function satker($id)
    {
        $dtsatker = Balai::find($id)->satker()->paginate(10);
        $listbalai = Balai::find($id);
        $listpaket = $listbalai->paket;
        //dd($listpaket);
        return view('balai.satker', compact('dtsatker', 'listbalai', 'listpaket'));
    }
    // public function paketbalai()
    // {
    //     $pktbalai = Balai::find($id)->satkert()->paginate(10);

    //     //dd($dtsatker);
    //     return view('balai.paketbalai', compact('pktbalai'));
    // }
}
