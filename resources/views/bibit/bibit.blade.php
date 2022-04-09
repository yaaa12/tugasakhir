@extends('adminlte::page')
@section('content')
<main>
    <div class="text">
        <h4 margin-left="text-center">Data Stok Bibit</h4>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right mb-2">
      <a class="btn btn-success" href="{{ url('/bibit/create') }}"><i class="fas fa-fw fa-plus"></i> Tambah Data Bibit</a>
    </div>

    <form action="/bibit">
        <div class="float-right input-group mb-2 ml-4 col-md-4">
            <input type="text" name="search" value="{{ request()-> search}}"
             placeholder="Cari stok bibit" aria-label="Amount (to the nearest dollar)" class="form-control">
            <div class="input-group-append">
                <button class="input-group-text btn btn-info">cari</button>
            </div>
        </div>

    <table class="table table-hover">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Bibit</th>
            <th>Harga</th>
            <th>Satuan</th>
            <th>Stok</th>
            <th margin-center>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bibits as $bibit)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $bibit->kode }}</td>
            <td>{{ $bibit->nama_bibit }}</td>
            <td>{{ $bibit->harga }}</td>
            <td>{{ $bibit->satuan }}</td>
            <td>{{ $bibit->stok }}</td>
            <td class="text-center">
            <form action="{{ url('bibit/'.$bibit->id) }}" method="POST">
              @method('DELETE')
              @csrf
                <a class="btn btn-info btn-xs" href="{{ route('bibit.show',$bibit->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>
                <a class="btn btn-primary btn-xs" href="{{ url('bibit/'.$bibit->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
