<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class Inventariscontroller extends Controller
{
    public function tambah(){
        return view('tambah');
    }
    public function simpan(Request $data){
       

        $simpan = new Barang();
        $simpan->nama = $data->namabarang;
        $simpan->harga = $data->hargabarang;
        $simpan->stok = $data->stokbarang;
        $simpan->save();
        return redirect('/home');
    }

    public function index()
    {
        $databarang = Barang::all();
        return view('home')->with([
            'semuabarang' -> $databarang
        ]);
     }
}
