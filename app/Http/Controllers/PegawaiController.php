<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = pegawai::all();
        return view('Master.pegawai.index' , compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('Master.pegawai.insert' , compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai = pegawai::create(
            [
                'nama_pegawai'  => $request->nama_pegawai,
                'no_telp' => $request->no_telp,
                'email' => $request->email,
                'id_jabatan' => $request->id_jabatan
            ]
            );
            return \redirect('/');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = pegawai::findorfail($id);
        $jabatan = jabatan::all();
        return view('Master.pegawai.edit', compact('pegawai','jabatan'));
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pegawai = pegawai::findorfail($request->id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->email = $request->email;
        $pegawai->id_jabatan = $request->id_jabatan;
        
        $pegawai->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pegawai = pegawai::findorfail($id);
        $pegawai->delete();
        return redirect('/');

    }


    public function destroy(pegawai $pegawai)
    {
        
    }
}
