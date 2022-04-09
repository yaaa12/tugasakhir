@extends('adminlte::page')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail surat jalan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($suratjln as $item)
                    <li class="list-group-item"><b>No Surat Jalan: </b>{{$item->no_suratjln}}</li>
                    <li class="list-group-item"><b>Tanggal Kirim: </b>{{$item->tanggal_kirim}}</li>
                    <li class="list-group-item"><b>Pelanggan: </b>{{$item->pelanggan}}</li>
                    <li class="list-group-item"><b>Nama Bibit: </b>{{$item->nama_bibit}}</li>
                    <li class="list-group-item"><b>Jumlah Bibit : </b>{{$item->jumlah_bibit}}</li>
                    <li class="list-group-item"><b>Satuan: </b>{{$item->satuan}}</li>
                    <li class="list-group-item"><b>Tanggal diterima: </b>{{$item->tanggal_diterima}}</li>
                    <li class="list-group-item"><b>keterangan: </b>{{$item->keterangan}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/suratjln') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
