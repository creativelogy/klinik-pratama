<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('reservasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		DB::table('pasien')->insert([
		'nama' => $request->nama,
		'nik' => $request->nik,
		'alamat' => $request->alamat,
		'tempat' => $request->tempat_lahir,
		'tanggal' => $request->tanggal_lahir,
		]);
	
		
		DB::table('reservasi')->insert([
		'no_telp' => $request->telp,
		'tanggal_rencana_datang' => $request->tgl,
		'id_dokter' => $request->codedoc,
		'id_poli_bagian' => $request->codepol,
		'keluhan' => $request->keluhan,
		]);
	// alihkan halaman ke halaman reservasi       
		return redirect()->route('reservasi.index')
			->with('success','Reservasi sedang diproses.');		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$reservasi = DB::table('reservasi')->get();
		return view('reservasi.view', compact('reservasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}