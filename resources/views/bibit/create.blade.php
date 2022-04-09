@extends('adminlte::page')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            {{-- <a class="btn btn-success mt-3 mb-5" href="{{ url('datastokbibit') }}">Kembali</a> --}}
            <div class="card-header">
            Tambah Data Bibit
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
            <form method="post" action="{{ url('bibit') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">Kode</label>
                    <input type="text" name="kode" class="form-control" id="name" >
                    <label for="nama">Nama Bibit</label>
                    <input type="text" name="nama_bibit" class="form-control" id="name" >
                    <label for="nama">Harga</label>
                    <input type="text" name="harga" class="form-control" id="name" >
                    <label for="nama">Satuan</label>
                    <input type="text" name="satuan" class="form-control" id="name" >
                    <label for="nama">Stok</label>
                    <input type="text" name="stok" class="form-control" id="name" >
                </div>
                <button type="submit" class="btn btn-primary mt-30 mb-50">Submit</button>
                <a class="btn btn-success mt-30 mb-50" href="{{ url('bibit') }}">Kembali</a>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
