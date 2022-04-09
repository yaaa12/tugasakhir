@extends('adminlte::page')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Data Pelanggan
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
            <form method="post" action="{{ url('pelanggan') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">Kode Pelanggan</label>
                    <input type="text" name="kode_pelanggan" class="form-control" id="name" >
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" id="name" >
                    <label for="nama">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="name" >
                    <label for="nama">Email</label>
                    <input type="text" name="email" class="form-control" id="name" >
                    <label for="nama">No Telp</label>
                    <input type="text" name="no_telp" class="form-control" id="name" >
                </div>
                <button type="submit" class="btn btn-primary mt-30 mb-50">Submit</button>
                <a class="btn btn-success mt-30 mb-50" href="{{ url('pelanggan') }}">Kembali</a>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
