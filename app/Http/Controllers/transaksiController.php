<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;
class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $search = $request->search;
        $transaksis = transaksi::when($search, function($query, $search){
            return $query->where('id_pelanggan', 'like', "%{$search}%");
        })->paginate(25);
        return view('transaksi.transaksi', [
            'transaksis'=>$transaksis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/transaksi.create');
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
            'tanggal' => 'required',
            'jumlah'=> 'required',
            'harga'=> 'required'
        ]);
        transaksi::create($request->all());

        return redirect('transaksi')->with('success', 'Data transaksi berhasil ditambahkan');
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        $transaksi = transaksi::find($transaksi);
        return view('/transaksi.detail', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        $transaksi = transaksi::find($transaksi);
        return view('/transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        $request->validate([
            'tanggal' => 'required',
            'jumlah'=> 'required',
            'harga'=> 'required'
        ]);

        $transaksi->tanggal = $request->tanggal;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->harga = $request->harga;
        $transaksi->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('/transaksi')
            ->with('success', 'Data transaksi Berhasil Diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect('/transaksi')->with('success', 'Data transaksi berhasil dihapus');
    }
}
