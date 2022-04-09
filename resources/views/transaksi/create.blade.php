@extends('adminlte::page')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Data Transaksi
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('transaksi') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">Id marketing</label>
                    <input type="text" name="id_marketing" class="form-control" id="name" >
                    <label for="nama">Id pelanggan</label>
                    <input type="text" name="id_pelanggan" class="form-control" id="name" >
                    <label for="nama">tanggal</label>
                    <input type="text" name="tanggal" class="form-control" id="name" >
                </div>
                <button type="submit" class="btn btn-primary mt-30 mb-50">Submit</button>
                <a class="btn btn-success mt-30 mb-50" href="{{ url('transaksi') }}">Kembali</a>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
