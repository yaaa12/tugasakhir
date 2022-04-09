<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suratjln;
use Illuminate\Support\Facades\DB;

class suratjlnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $suratjlns = suratjln::when($search, function($query, $search){
            return $query->where('no_suratjln', 'like', "%{$search}%");
        })->paginate(25);
        return view('suratjln.suratjln', [
            'suratjlns'=>$suratjlns,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/suratjln.create');
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
            'no_suratjln' => 'required',
            'tanggal_kirim'=> 'required',
            'pelanggan'=> 'required',
            'nama_bibit'=> 'required',
            'jumlah_bibit'=> 'required',
            'satuan'=> 'required',
            'tanggal_diterima'=> 'required',
            'keterangan'=> 'required',
        ]);
        suratjln::create($request->all());

        return redirect('/suratjln')->with('success', 'Surat jalan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suratjln  $suratjln
     * @return \Illuminate\Http\Response
     */
    public function show(suratjln $suratjln)
    {
        $suratjln = suratjln::find($suratjln);
        return view('/suratjln.detail', compact('suratjln'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suratjln  $suratjln
     * @return \Illuminate\Http\Response
     */
    public function edit(suratjln $suratjln)
    {
        $suratjln = suratjln::find($suratjln);
        return view('/suratjln.edit', compact('suratjln'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suratjln  $suratjln
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suratjln $suratjln)
    {
        $request->validate([
        'no_suratjln' => 'required',
        'tanggal_kirim' => 'required',
        'pelanggan' => 'required',
        'nama_bibit' => 'required',
        'jumlah_bibit' => 'required',
        'satuan' => 'required',
        'tanggal_diterima' => 'required',
        'keterangan' => 'required'
        ]);

        $suratjln->no_suratjln = $request->no_suratjln;
        $suratjln->tanggal_kirim = $request->tanggal_kirim;
        $suratjln->pelanggan = $request->pelanggan;
        $suratjln->nama_bibit= $request->nama_bibit;
        $suratjln->jumlah_bibit = $request->jumlah_bibit;
        $suratjln->satuan = $request->satuan;
        $suratjln->tanggal_diterima = $request->tanggal_diterima;
        $suratjln->keterangan = $request->keterangan;
        $suratjln->save();

         //jika data berhasil diupdate, akan kembali ke halaman utama
         return redirect('/suratjln')
         ->with('success', 'Data Surat Jalan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suratjln  $suratjln
     * @return \Illuminate\Http\Response
     */
    public function destroy(suratjln $suratjln)
    {
        $suratjln->delete();
        return redirect('/suratjln')->with('success', 'Data Surat Jalan berhasil dihapus');
    }
}
