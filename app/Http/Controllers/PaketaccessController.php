<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paketaccess;

class PaketaccessController extends Controller


{
    public function index(Request $request)
    {

        $jmlpaket = Paketaccess::all();
        $data_paket = Paketaccess::paginate(10);

        return view('paketaccess.index', compact('data_paket', 'jmlpaket'));
    }
}
