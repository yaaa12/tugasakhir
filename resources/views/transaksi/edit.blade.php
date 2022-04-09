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
            @foreach ($transaksi as $item )
            <form method="post" action="{{ url('transaksi/'.$item->id) }}" id="myForm">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Id marketing</label>
                <input type="text" name="id_marketing" class="form-control" id="name" value="{{ $item->id_marketing }}">
            </div>
            <div class="form-group">
                <label for="email">Id pelanggan</label>
                <input type="text" name="id_pelanggan" class="form-control" id="email" value="{{ $item->id_pelanggan }}">
            </div>
            <div class="form-group">
                <label for="writer">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" id="password" value="{{ $item->tanggal }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
