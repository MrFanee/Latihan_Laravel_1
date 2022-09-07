<?php

namespace App\Http\Controllers;

use App\jual;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_barang= jual::all();
        // return $table;
        return view('jual', compact('table_barang'));
        // $table_barang = DB::table('barang')->get();
        // return view('jual', ['table_jual' =>$table_barang]);

    }
    public function cetak_pdf()
    {
        $table_barang= jual::all();
        $pdf = PDF::loadview('pdf/barang_pdf',['table_barang'=>$table_barang]);
        return $pdf->stream();
        // return $pdf->download('laporan-pegawai-pdf');
    }

    public function export_excel()
    {
        return Excel::download(new BarangExport, 'barang.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create/createBarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_suplier' => 'required'
    	]);

        jual::create([
    		'nama_barang' => $request->nama_barang,
    		'harga' => $request->harga,
    		'stok' => $request->stok,
    		'id_suplier' => $request->id_suplier
    	]);

    	return redirect('/jual');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function show(jual $jual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jual  $jual
     * @return \Illuminate\Http\Response
     */

    public function edit($id_barang)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $table_barang = DB::table('barang')->where('id_barang',$id_barang)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit/editBarang',['barang' => $table_barang]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('barang')->where('id_barang', $request->id_barang)->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'id_suplier' => $request->id_suplier
        ]);

        return redirect('/jual');
    }

    public function delete($id_barang)
    {
        DB::table('barang')->where('id_barang',$id_barang)->delete();
        return redirect('jual');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function destroy(jual $jual)
    {
        //
    }
}
