<?php

namespace App\Http\Controllers;

use App\pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\PembeliExport;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\PDF;
use Maatwebsite\Excel\Facades\Excel;

class PembeliController extends Controller
{
    public function index()
    {
        $table_pembeli=pembeli::all();
        // return $table;
        return view('pembeli', compact('table_pembeli'));
        // $table_barang = DB::table('barang')->get();
        // return view('jual', ['table_jual' =>$table_barang]);

    }

    public function cetak_pdf()
    {
        $table_pembeli= pembeli::all();
        $pdf = PDF::loadview('/pembeli_pdf',['table_pembeli'=>$table_pembeli]);
        return $pdf->stream();
        // return $pdf->download('laporan-pegawai-pdf');
    }

    public function export_excel()
    {
        return Excel::download(new PembeliExport, 'pembeli.xlsx');
    }

    public function create()
    {
        return view('create/createPembeli');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama_pembeli' => 'required',
            'jk' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required'
    	]);

        pembeli::create([
    		'nama_pembeli' => $request->nama_pembeli,
            'jk' => $request->jk,
    		'no_tlp' => $request->no_tlp,
    		'alamat' => $request->alamat
    	]);

    	return redirect('/pembeli');
    }

    public function delete($id_pembeli)
    {
        DB::table('pembeli')->where('id_pembeli',$id_pembeli)->delete();
        return redirect('pembeli');
    }

    public function edit($id_pembeli)
    {
        $table_pembeli = DB::table('pembeli')->where('id_pembeli', $id_pembeli)->get();
        return view('edit/editPembeli', ['pembeli' => $table_pembeli]);

    }

    public function update(Request $request)
    {
        DB::table('pembeli')->where('id_pembeli', $request->id_pembeli)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'jk' => $request->jk,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);

        return redirect('pembeli');
    }
}
