<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;
use Storage;

class MerekController extends Controller
{

    public function index()
    {
        $merek = Merek::latest()->paginate(5);
        return view('merek.index', compact('merek'));
    }

    public function create()
    {
        return view('merek.create');
    }
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:5',
        ]);

        $merek = new Merek();
        $merek->nama_merek = $request->nama;
        
        $merek->save();
        return redirect()->route('merek.index');
    }

    public function show($id)
    {
        $merek = Merek::findOrFail($id);
        return view('merek.show', compact('merek'));
    }

    public function edit($id)
    {
        $merek = Merek::findOrFail($id);
        return view('merek.edit', compact('merek'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_merek' => 'required|min:5',
        ]);

        $merek = Merek::findOrFail($id);
        $merek->nama_merek = $request->nama_merek;

        $merek->save();
        return redirect()->route('merek.index');

    }

    public function destroy($id)
    {
        $merek = Merek::findOrFail($id);
        $merek->delete();
        return redirect()->route('merek.index');

    }

    
}