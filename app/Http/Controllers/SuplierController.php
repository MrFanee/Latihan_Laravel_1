<?php

namespace App\Http\Controllers;

use App\suplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SuplierExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class SuplierController extends Controller
{
    public function index()
    {
        $table_suplier=suplier::all();
        return view('suplier', compact('table_suplier'));
    }

    public function cetak_pdf()
    {
        $table_suplier= suplier::all();
        $pdf = PDF::loadview('pdf/suplier_pdf',['table_suplier'=>$table_suplier]);
        return $pdf->stream();
    }

    public function export_excel()
    {
        return Excel::download(new SuplierExport, 'suplier.xlsx');
    }

    public function create()
    {
        return view('create/createSuplier');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama_suplier' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required'
    	]);
        suplier::create([
    		'nama_suplier' => $request->nama_suplier,
    		'no_tlp' => $request->no_tlp,
    		'alamat' => $request->alamat
    	]);
    	return redirect('/suplier');
    }

    public function delete($id_suplier)
    {
        DB::table('suplier')->where('id_suplier',$id_suplier)->delete();
        return redirect('suplier');
    }

    public function edit($id_suplier)
    {
        $table_suplier = DB::table('suplier')->where('id_suplier', $id_suplier)->get();
        return view('edit/editSuplier', ['suplier' => $table_suplier]);

    }

    public function update(Request $request)
    {
        DB::table('suplier')->where('id_suplier', $request->id_suplier)->update([
            'nama_suplier' => $request->nama_suplier,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);

        return redirect('suplier');
    }
}
