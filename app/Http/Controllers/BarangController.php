<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {
        $barang = Barang::latest()->paginate(5);
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_barang' => 'required|min:5',
            'harga' => 'required|min:5',
            'stok' => 'required|min:1',
            'id_merek' => 'required|min:1',
        ]);

        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->id_merek = $request->id_merek;
        
        $barang->save();
        return redirect()->route('barang.index');
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_barang' => 'required|min:5',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->id_merek = $request->id_merek;

        $barang->save();
        return redirect()->route('barang.index');

    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index');

    }

}