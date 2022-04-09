@extends('adminlte::page')
@section('content')
<main>
    <div class="text">
        <h4 class="text-left pt-4">Surat Jalan</h4>
    </div>
</div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right mb-2">
      <a class="btn btn-success" href="{{ url('/suratjln/create') }}"><i class="fas fa-fw fa-plus"></i> Tambah Surat Jalan</a>
    </div>

    <form action="/suratjln">
        <div class="float-right input-group mb-2 ml-4 col-md-4">
            <input type="text" name="search" value="{{ request()-> search}}"
             placeholder="Cari surat jalan" aria-label="Amount (to the nearest dollar)" class="form-control">
            <div class="input-group-append">
                <button class="input-group-text btn btn-info">cari</button>
            </div>
        </div>

    <table class="table table-hover">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>No Surat Jalan</th>
            <th>Tanggal Kirim</th>
            <th>Pelanggan</th>
            <th>Nama Bibit</th>
            <th>Jumlah Bibit</th>
            <th>Satuan</th>
            <th>Tanggal Diterima</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($suratjlns as $suratjln)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $suratjln->no_suratjln }}</td>
            <td>{{ $suratjln->tanggal_kirim }}</td>
            <td>{{ $suratjln->pelanggan}}</td>
            <td>{{ $suratjln->nama_bibit }}</td>
            <td>{{ $suratjln->jumlah_bibit }}</td>
            <td>{{ $suratjln->satuan }}</td>
            <td>{{ $suratjln->tanggal_diterima }}</td>
            <td>{{ $suratjln->keterangan }}</td>
            <td class="text-center">
            <form action="{{ url('suratjln/'.$suratjln->id) }}" method="POST">
              @method('DELETE')
              @csrf
                <a class="btn btn-info btn-xs" href="{{ route('suratjln.show',$suratjln->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>
                <a class="btn btn-primary btn-xs" href="{{ url('suratjln/'.$suratjln->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
