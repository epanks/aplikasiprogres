<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satker;
use App\Balai;

class SatkerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_satker = Satker::where('nmsatker', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->paginate(20);
        } else {
            $data_satker = Satker::paginate(20);
        }
        return view('satker.index', compact('data_satker'));
    }

    // public function satker(Balai $balai)
    // {
    //     $dtsatker = Balai::find($balai);

    //     //dd($satker);
    //     return view('satker.satker', compact('dtsatker'));
    // }

    public function profile($id)
    {
        $dtpaket = Satker::find($id);
        $listpaket = $dtpaket->paket;
        $profilesatker = Satker::find($id)->paket()->paginate(10);
        $listsatker = Satker::find($id);

        //dd($dtsatker);
        return view('satker.profile', compact('profilesatker', 'listsatker', 'listpaket'));
    }
}
