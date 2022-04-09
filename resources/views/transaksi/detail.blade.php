@extends('adminlte::page')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail data transaksi
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($transaksi as $item)
                    <li class="list-group-item"><b>Id marketing: </b>{{$item->id_marketing}}</li>
                    <li class="list-group-item"><b>Id pelanggan: </b>{{$item->id_pelanggan}}</li>
                    <li class="list-group-item"><b>Tanggal: </b>{{$item->tanggal}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/transaksi') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
