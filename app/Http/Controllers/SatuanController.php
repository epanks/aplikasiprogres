<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;

class SatuanController extends Controller
{
    public function index()
    {

        $data_satuan = Satuan::paginate(10);
        //dd($data_satuan);
        return view('satuan.index', compact('data_satuan'));
    }
}
