@extends('adminlte::page')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Kategori
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
            @foreach ($suratjln as $item )
            <form method="post" action="{{ url('suratjln/'.$item->id) }}" id="myForm">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nama">No Surat Jalan</label>
                <input type="text" name="no_suratjln" class="form-control" id="name" value="{{ $item->no_suratjln }}">
                <label for="nama">Tanggal Kirim</label>
                <input type="text" name="tanggal_kirim" class="form-control" id="email" value="{{ $item->tanggal_kirim}}">
                <label for="nama">Pelanggan</label>
                <input type="text" name="pelanggan" class="form-control" id="password" value="{{ $item->pelanggan }}">
                <label for="nama">Nama Bibit</label>
                <input type="text" name="nama_bibit" class="form-control" id="email" value="{{ $item->nama_bibit}}">
                <label for="nama">Jumlah Bibit</label>
                <input type="text" name="jumlah_bibit" class="form-control" id="password" value="{{ $item->jumlah_bibit }}">
                <label for="nama">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="password" value="{{ $item->satuan }}">
                <label for="nama">Tanggal Diterima</label>
                <input type="text" name="tanggal_diterima" class="form-control" id="password" value="{{ $item->tanggal_diterima }}">
                <label for="nama">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="password" value="{{ $item->keterangan }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
