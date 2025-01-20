<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use PhpParser\Node\Expr\Cast\String_;

class PurchaserController extends Controller
{
    public function index(){
        $barangs = Barang::paginate(10);
        return view('purchaser.dashboard',compact('barangs'));
    }
    public function create(){
        return view('purchaser.create');
    }
    public function ambilBarang(Request $request, string $id){
        $request->validate([
            'jumlah_ambil'=>'required|integer|min:1',
        ]);
        $barangs = Barang::find($id);
        if($request->jumlah_ambil > $barangs->jumlah){
            return redirect()->route('purchaser.index')->withErrors('jumlah barang tidak mencukupi');
        }
        $barangs->jumlah -= $request->jumlah_ambil;
        $barangs->save();

        return redirect()->route('purchaser.index')->with('success',  $barangs->nama_barang . ' berhasil diambil');
    }
}
