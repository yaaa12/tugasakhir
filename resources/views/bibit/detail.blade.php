@extends('adminlte::page')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail data bibit
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($bibit as $item)
                    <li class="list-group-item"><b>Kode: </b>{{$item->kode}}</li>
                    <li class="list-group-item"><b>Nama bibit: </b>{{$item->nama_bibit}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$item->harga}}</li>
                    <li class="list-group-item"><b>Satuan: </b>{{$item->satuan}}</li>
                    <li class="list-group-item"><b>stok: </b>{{$item->stok}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/bibit') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
