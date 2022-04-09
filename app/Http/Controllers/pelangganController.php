<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use Illuminate\Support\Facades\DB;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $search = $request->search;
        $pelanggans = pelanggan::when($search, function($query, $search){
            return $query->where('nama_pelanggan', 'like', "%{$search}%");
        })->paginate(25);
        return view('pelanggan.pelanggan', [
            'pelanggans'=>$pelanggans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pelanggan.create');
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
            'kode_pelanggan' => 'required',
            'nama_pelanggan'=> 'required',
            'alamat'=> 'required',
            'email'=> 'required',
            'no_telp'=> 'required'
        ]);
        pelanggan::create($request->all());

        return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggan $pelanggan)
    {
        $pelanggan = pelanggan::find($pelanggan);
        return view('/pelanggan.detail', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggan $pelanggan)
    {
        $pelanggan = pelanggan::find($pelanggan);
        return view('/pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggan $pelanggan)
    {
        $request->validate([
            'kode_pelanggan' => 'required',
            'nama_pelanggan'=> 'required',
            'alamat'=> 'required',
            'email'=> 'required',
            'no_telp'=> 'required'
        ]);

        $pelanggan->kode_pelanggan = $request->kode_pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->email = $request->email;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('/pelanggan')
            ->with('success', 'Data pelanggan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect('/pelanggan')->with('success', 'Data Pelanggan berhasil dihapus');
    }
}
