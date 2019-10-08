<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\PaketExport;
// use Maatwebsite\Excel\Facades\Excel;
use App\Paket;
use App\Satker;
use App\Balai;

class PaketController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_paket = Paket::where('nmpaket', 'LIKE', '%' . $request->cari . '%')->orWhere('kdsatker', 'LIKE', '%' . $request->cari . "%")->paginate(10);
            $jmlpaket = Paket::all();
            $total = $data_paket->sum('pagurmp');
            $avg_keu = $data_paket->avg('progres_keu');
            $avg_fisik = $data_paket->avg('progres_fisik');
        } else {
            $jmlpaket = Paket::all();
            $data_paket = Paket::paginate(10);
            $total = $data_paket->sum('pagurmp');
            $avg_keu = $data_paket->avg('progres_keu');
            $avg_fisik = $data_paket->avg('progres_fisik');
        }
        return view('paket.index', compact('data_paket', 'total', 'avg_keu', 'avg_fisik', 'jmlpaket'));
    }

    public function create(Request $request)
    {
        Paket::create($request->all());
        return redirect('/paket')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $data_paket = Paket::find($id);
        return view('paket/edit', compact('data_paket'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'progres_keu' => 'numeric|between:0,100',
            'progres_fisik' => 'numeric|between:0,100'
        ]);
        $data_paket = Paket::find($id);
        $data_paket->update($request->all());
        return redirect('/satker')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $data_paket = Paket::find($id);
        $data_paket->delete($data_paket);
        return redirect('/paket')->with('sukses', 'Data berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new PaketExport, 'paket.xlsx');
    }

    public function import_excel()
    {
        $data_import = Paket::table('paket')->orderBy('id', 'asc') > get();
        return view('paket_import', compact('data_import'));
    }

    public function profile($id)
    {
        $profile_paket = Paket::find($id);
        $dt = $profile_paket->kdsatker;
        $data_balai = $dt;

        //dd($data_balai);
        return view('paket.profile', compact('profile_paket', 'data_balai'));
    }
}
