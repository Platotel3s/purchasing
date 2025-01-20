<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BuyerController extends Controller
{
    public function index(){
        return view('buyer.dashboard');
    }
    public function create(){
        return view('buyer.create');
    }
    public function store(Request $request){
        $request->validate([
            'nama_barang'=>'required',
            'jumlah'=>'required|integer',
            'satuan'=>'required|string|max:10'
        ]);
        Barang::create($request->all());
        return redirect()->route('buyer.create')->with('success', 'barang berhasil ditambahkan');
    }
}
