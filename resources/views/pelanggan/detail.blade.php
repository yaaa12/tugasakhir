@extends('adminlte::page')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail data pelanggan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($pelanggan as $item)
                    <li class="list-group-item"><b>Kode Pelanggan: </b>{{$item->kode_pelanggan}}</li>
                    <li class="list-group-item"><b>Nama Pelanggan: </b>{{$item->nama_pelanggan}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$item->alamat}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$item->email}}</li>
                    <li class="list-group-item"><b>No Telp: </b>{{$item->no_telp}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/pelanggan') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
