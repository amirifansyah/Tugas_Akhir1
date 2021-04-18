<?php

namespace App\Http\Controllers;

use App\Kamar;
use App\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();
        return view('crud.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamars = Kamar::all();
        return view('crud.create', compact('kamars'));
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
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'alamat' => '',
            'masuk' => 'required',
            'kamar_id' => 'required',
            'diagnosis' => 'required',
            'keluar' => ''
        ]);
        $pasien = Pasien::create($validated);
        return redirect('/admin')->with('pesan', "data pasien berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        return view('crud.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('crud.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'alamat' => '',
            'masuk' => 'required',
            'diagnosis' => 'required',
            'keluar' => ''
        ]);
        $pasien->update($validated);
        return redirect('/pasiens/'.$pasien->id)->with('pesan', "data pasien berhasil di ubah");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect('/admin')->with('pesan', "data berhasil dihapus");
    }
}
