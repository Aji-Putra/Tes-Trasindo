<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function datapemesan()
    {
        $data = [
            'pemesan' => pembelian::all()
        ];

        return view('admin.pesanan', $data);
    }

    public function edit($id)
    {

        $query = DB::table('pembelians')->where('id', $id)->first();
        $data = [
            'pesanan' => $query
        ];
        return view('admin.edit', $data);
    }

    public function update(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'email' => $request->input('email'),
            'no_telepone' => $request->input('no_telepone'),
        ];

        $query = pembelian::findOrfail($request->id);
        $query->update($data);

        return redirect()->route('datapelanggan');
    }

    public function destroy($id)
    {
        $query = pembelian::findOrfail($id);
        $query->delete();
        return redirect()->route('datapelanggan');
    }

    public function cekin()
    {
        $data = [
            'pemesan' => pembelian::all()
        ];

        return view('admin.cekin',$data);
    }

    public function updatestatus($id)
    {
        $query = DB::table('pembelians')->where('id', $id)->first();
        $data = [
            'pesanan' => $query
        ];
        return view('admin.status', $data);
    }

    public function status(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'email' => $request->input('email'),
            'no_telepone' => $request->input('no_telepone'),
            'status'    =>$request->input('status')
        ];

        $query = pembelian::findOrfail($request->id);
        $query->update($data);

        return redirect()->route('cekin');
    }

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$pesanan = DB::table('pembelians')->where('id','like',"%".$cari."%")->paginate();
		return view('admin.cekin',['pemesan' => $pesanan]);
 
	}

    public function laporan()
    {
        $data = [
            'laporan' => pembelian::all()
        ];
        return view('admin.laporan',$data);
    }
}
