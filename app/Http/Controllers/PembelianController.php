<?php

namespace App\Http\Controllers;

use App\Models\pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function buy(Request $request)
    {
        pembelian::create([
            'nama' => $request->input('nama'),
            'umur'  => $request->input('umur'),
            'email'  => $request->input('email'),
            'no_telepone'  => $request->input('no_telepone'),
        ]);
        return redirect('/')->with(['success' => 'Pembelian Tiket Success']);
    }

    public function detailtiket()
    {
        // $data = [
        //     'idpelanggan' => pembelian::latest()->get()
        // ];
        $data = pembelian::latest()->paginate(1);
        return view('detail', compact('data'));
    }
}
