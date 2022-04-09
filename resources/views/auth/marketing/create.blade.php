@extends('adminlte::page')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Marketing</h3>
          <div class="card-tools">
            <a href="{{ route('marketing.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group">
              <label for="nama_marketing">Nama Marketing</label>
              <input type="text" name="nama_marketing" id="nama_marketing" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="deskripsi">Username</label>
              <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
