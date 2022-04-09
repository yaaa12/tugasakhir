<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bibit;
use Illuminate\Support\Facades\DB;

class bibitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // membuat search
     public function search(Request $bibit)
    {
        $keyword = $bibit->search;
        $bibits = bibit::where('nama_bibit', 'kode','harga', 'stok', "satuan" . $keyword . "nama_bibit")->paginate(5);
        return view('bibit.bibit', compact('bibits'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index(Request $request) {
        $search = $request->search;
        $bibits = bibit::when($search, function($query, $search){
            return $query->where('nama_bibit', 'like', "%{$search}%");
        })->paginate(25);

        return view('bibit.bibit', [
            'bibits'=>$bibits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/bibit.create');
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
            'kode' => 'required',
            'nama_bibit'=> 'required',
            'harga'=> 'required',
            'satuan'=> 'required',
            'stok'=> 'required'
        ]);

        bibit::create($request->all());

        return redirect('/bibit')->with('success', 'Bibit berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function show(bibit $bibit)
    {
        $bibit = bibit::find($bibit);
        return view('/bibit.detail', compact('bibit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function edit(bibit $bibit)
    {
        $bibit = bibit::find($bibit);
        return view('/bibit.edit', compact('bibit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bibit $bibit)
    {
        $request->validate([
            'kode' => 'required',
            'nama_bibit'=> 'required',
            'harga'=> 'required',
            'satuan'=> 'required',
            'stok'=> 'required'
        ]);

        $bibit->kode = $request->kode;
        $bibit->nama_bibit = $request->nama_bibit;
        $bibit->harga = $request->harga;
        $bibit->satuan = $request->satuan;
        $bibit->stok = $request->stok;
        $bibit->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('/bibit')
            ->with('success', 'Bibit Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bibit  $bibit
     * @return \Illuminate\Http\Response
     */
    public function destroy(bibit $bibit)
    {
        $bibit->delete();
        return redirect('/bibit')->with('success', 'Bibit berhasil dihapus');
    }
}
