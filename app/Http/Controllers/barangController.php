<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::paginate(10);
        return view('barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'=>'required',
            'jumlah'=>'required|integer',
            'satuan'=>'required|string|max:10'
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.create')->with('success','Berhasil menambah barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangs=Barang::findOrFail($id);
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $barangs = Barang::findOrFail($id);
        return view('barang.edit',compact('barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            "nama_barang"=>"required|string|max:225",
            "jumlah"=>"required|integer",
            "satuan"=>"required|string"
        ]);
        $barangs=Barang::findOrFail($id);
        $barangs->update($request->all());
        return redirect()->route('barang.index',$id)->with('success','Berhasil memperbarui data barang!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangs=Barang::findOrFail($id);
        $barangs->delete();

        return redirect()->route('barang.index')->with('success',$barangs->nama_barang . ' telah dihapus !!!');
    }

    /*
        Logika controller ambil barang
    */

    public function ambilBarang(Request $request, string $id){
        $request->validate([
            'jumlah_ambil'=>'required|integer|min:1'
        ]);
        $barangs = Barang::findOrFail($id);
        if($request->jumlah_ambil > $barangs->jumlah){
            return redirect()->route('barang.index')->withErrors('jumlah barang tidak mencukupi');
        }
        $barangs->jumlah -= $request->jumlah_ambil;
        $barangs->save();

        return redirect()->route('barang.index')->with('success',  $barangs->nama_barang . ' berhasil diambil');
    }
}
