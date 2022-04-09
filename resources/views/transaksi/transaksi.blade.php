@extends('adminlte::page')
@section('content')
<main>
    <div class="text">
      <h3 margin-left="text-center">Data Transaksi</h3>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ url('/transaksi/create') }}"><i class="fas fa-fw fa-plus"></i> Tambah Data Transaksi</a>
    </div>
    <table class="table table-light table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Id_marketing</th>
            <th>Id_pelanggan</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transaksis as $transaksi)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $transaksi->id_marketing }}</td>
            <td>{{ $transaksi->id_pelanggan }}</td>
            <td>{{ $transaksi->tanggal }}</td>
            <td class="text-center">
            <form action="{{ url('transaksi/'.$transaksi->id) }}" method="POST">
              @method('DELETE')
              @csrf
                <a class="btn btn-info btn-sm" href="{{ route('transaksi.show',$transaksi->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm" href="{{ url('transaksi/'.$transaksi->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
