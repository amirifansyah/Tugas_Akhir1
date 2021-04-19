<?php

namespace App\Http\Controllers;

use App\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamars = Kamar::all();
       return view('crudkamar.index', compact('kamars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudkamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kamar' => 'required|min:3|max:50',
            'kelas' => 'required',
            'kapasitas' => 'required|integer|min:2|max:10',
            ]);
        Kamar::create($validated);
        return redirect()->route('kamars.index')->with('pesan', "data kamar berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kamar $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        return view('crudkamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kamar $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view('crudkamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kamar $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $validated = $request->validate([
            'nama_kamar' => 'required|min:3|max:50',
            'kelas' => 'required',
            'kapasitas' => 'required|integer|min:2|max:10',
            ]);
        $kamar->update($validated);
        return redirect('/kamars')->with('pesan', "data kamar berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kamar $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect('/kamars')->with('pesan', "data berhasil dihapus");
    }

}