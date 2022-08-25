<?php

namespace App\Http\Controllers;

use App\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index()
    {
        $table_transaksi=transaksi::all();
        return view('transaksi', compact('table_transaksi'));
    }

    public function cetak_pdf()
    {
        $table_transaksi= transaksi::all();
        $pdf = PDF::loadview('pdf/transaksi_pdf',['table_transaksi'=>$table_transaksi]);
        return $pdf->stream();
        // return $pdf->download('laporan-pegawai-pdf');
    }

    public function export_excel()
    {
        return Excel::download(new TransaksiExport, 'transaksi.xlsx');
    }

    public function create()
    {
        return view('create/createTransaksi');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'id_barang' => 'required',
            'id_pembeli' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
    	]);
 
        transaksi::create([
    		'id_barang' => $request->id_barang,
            'id_pembeli' => $request->id_pembeli,
    		'tanggal' => $request->tanggal,
    		'keterangan' => $request->keterangan
    	]);
 
    	return redirect('/transaksi');
    }

    public function delete($id_transaksi)
    {
        DB::table('transaksi')->where('id_transaksi',$id_transaksi)->delete();
        return redirect('transaksi');
    }
}
