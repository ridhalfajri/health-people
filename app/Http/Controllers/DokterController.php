<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = (object) [
            'title' => 'Daftar Dokter',
            'kategori' => 'Dokter',
            'aksi' => 'Daftar'
        ];
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter', 'header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        $header = (object) [
            'title' => 'Tambah Dokter',
            'kategori' => 'Dokter',
            'aksi' => 'Tambah'
        ];

        return view('dokter.create', compact('provinsi', 'header'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'provinsi' => 'required',
            'nama' => 'required',
            'no_telp' => 'required|numeric',
            'status' => 'required'
        ]);

        $dokter = new Dokter();
        $dokter->provinsi_id = $request->provinsi;
        $dokter->nama = $request->nama;
        $dokter->no_telp = $request->no_telp;
        $dokter->status = $request->status;
        $dokter->save();
        return redirect('dokter')->with('tambah', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        $provinsi = Provinsi::all();
        $header = (object) [
            'title' => 'Tambah Dokter',
            'kategori' => 'Dokter',
            'aksi' => 'Tambah'
        ];
        return view('dokter.edit', compact('dokter', 'provinsi', 'header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([
            'provinsi' => 'required',
            'nama' => 'required',
            'no_telp' => 'required|numeric',
            'status' => 'required'
        ]);

        $dokter->provinsi_id = $request->provinsi;
        $dokter->nama = $request->nama;
        $dokter->no_telp = $request->no_telp;
        $dokter->status = $request->status;
        $dokter->save();
        return redirect('dokter')->with('edit', 'Data Berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokter $dokter)
    {
        //
    }
}
