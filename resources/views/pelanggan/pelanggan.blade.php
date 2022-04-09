@extends('adminlte::page')
@section('content')
<main>
    <div class="text">
        <h4 class="text-left pt-4">Data Pelanggan</h4>
    </div>
</div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right mb-2">
      <a class="btn btn-success" href="{{ url('/pelanggan/create') }}"><i class="fas fa-fw fa-plus"></i> Tambah Data Pelanggan</a>
    </div>

    <form action="/pelanggan">
        <div class="float-right input-group mb-2 ml-4 col-md-4">
            <input type="text" name="search" value="{{ request()-> search}}"
             placeholder="Cari nama pelanggan" aria-label="Amount (to the nearest dollar)" class="form-control">
            <div class="input-group-append">
                <button class="input-group-text btn btn-info">cari</button>
            </div>
        </div>

    <table class="table table-hover">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Kode pelanggan</th>
            <th>Nama pelanggan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pelanggans as $pelanggan)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pelanggan->kode_pelanggan }}</td>
            <td>{{ $pelanggan->nama_pelanggan }}</td>
            <td>{{ $pelanggan->alamat }}</td>
            <td>{{ $pelanggan->email }}</td>
            <td>{{ $pelanggan->no_telp }}</td>
            <td class="text-center">
            <form action="{{ url('pelanggan/'.$pelanggan->id) }}" method="POST">
              @method('DELETE')
              @csrf
                <a class="btn btn-info btn-xs" href="{{ route('pelanggan.show',$pelanggan->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>
                <a class="btn btn-primary btn-xs" href="{{ url('pelanggan/'.$pelanggan->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
