<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; // Tambahkan ini

class HomeController extends Controller
{
    public function index()
    {
        $databarang = Barang::all();
        return view('home')->with([
            'semuabarang' => $databarang
        ]);
    }
}
