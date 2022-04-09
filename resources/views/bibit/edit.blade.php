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
            @foreach ($bibit as $item )
            <form method="post" action="{{ url('bibit/'.$item->id) }}" id="myForm">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Kode</label>
                <input type="text" name="kode" class="form-control" id="name" value="{{ $item->kode }}">
                <label for="email">Nama Bibit</label>
                <input type="text" name="nama_bibit" class="form-control" id="email" value="{{ $item->nama_bibit }}">
                <label for="writer">Harga</label>
                <input type="text" name="harga" class="form-control" id="password" value="{{ $item->harga }}">
                <label for="writer">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="password" value="{{ $item->satuan }}">
                <label for="writer">Stok</label>
                <input type="text" name="stok" class="form-control" id="password" value="{{ $item->stok }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
