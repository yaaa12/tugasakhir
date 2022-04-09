@extends('adminlte::page')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Surat Jalan
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
            <form method="post" action="{{ url('suratjln') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">No Surat Jalan</label>
                    <input type="text" name="no_suratjln" class="form-control" id="name" >
                    <label for="nama">Tanggal Kirim</label>
                    <input type="text" name="tanggal_kirim" class="form-control" id="name" >
                    <label for="nama">Pelanggan</label>
                    <input type="text" name="pelanggan" class="form-control" id="name" >
                    <label for="nama">Nama Bibit</label>
                    <input type="text" name="nama_bibit" class="form-control" id="name" >
                    <label for="nama">Jumlah Bibit</label>
                    <input type="text" name="jumlah_bibit" class="form-control" id="name" >
                    <label for="nama">satuan</label>
                    <input type="text" name="satuan" class="form-control" id="name" >
                    <label for="nama">Tanggal Diterima</label>
                    <input type="text" name="tanggal_diterima" class="form-control" id="name" >
                    <label for="nama">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="name" >
                </div>
                <button type="submit" class="btn btn-primary mt-30 mb-50">Submit</button>
                <a class="btn btn-success mt-30 mb-50" href="{{ url('suratjln') }}">Kembali</a>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
