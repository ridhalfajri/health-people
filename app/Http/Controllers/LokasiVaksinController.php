<?php

namespace App\Http\Controllers;

use App\Models\LokasiVaksin;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class LokasiVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = (object) [
            'title' => 'Daftar Lokasi Vaksin',
            'kategori' => 'Lokasi Vaksin',
            'aksi' => 'Daftar'
        ];
        $lokasi_vaksin = LokasiVaksin::all();
        return view('lokasi.index', compact('lokasi_vaksin', 'header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = (object) [
            'title' => 'Tambah Lokasi Vaksin',
            'kategori' => 'Lokasi Vaksin',
            'aksi' => 'Tambah'
        ];
        $provinsi = Provinsi::all();
        return view('lokasi.create', compact('header', 'provinsi'));
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
            'nama_tempat' => 'required',
            'alamat_lengkap' => 'required',
            'no_telp' => 'required',
            'status' => 'required'
        ]);
        $lokasi = new LokasiVaksin();
        $lokasi->provinsi_id = $request->provinsi;
        $lokasi->nama_tempat = $request->nama_tempat;
        $lokasi->alamat_lengkap = $request->alamat_lengkap;
        $lokasi->no_telp = $request->no_telp;
        $lokasi->status = $request->status;
        $lokasi->save();
        return redirect('lokasi')->with('tambah', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LokasiVaksin  $lokasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function show(LokasiVaksin $lokasiVaksin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LokasiVaksin  $lokasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function edit(LokasiVaksin $lokasiVaksin)
    {

        //! TIDAK BISA MENDAPATKAN LOKASI VAKSIN BERDASARKAN ID
        $header = (object) [
            'title' => 'Edit Lokasi Vaksin',
            'kategori' => 'Lokasi Vaksin',
            'aksi' => 'Edit'
        ];
        $provinsi = Provinsi::all();
        return view('lokasi.edit', compact('header', 'provinsi', 'lokasiVaksin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LokasiVaksin  $lokasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LokasiVaksin $lokasiVaksin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LokasiVaksin  $lokasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function destroy(LokasiVaksin $lokasiVaksin)
    {
        //
    }
}
