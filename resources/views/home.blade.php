@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sistem Informasi Manajemen Administrasi Penjualan</h1>
@stop

{{-- coba-coba content --}}
{{-- @section('content')
<div class="info-box">
    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Messages</span>
      <span class="info-box-number">1,410</span>
    </div>
  </div>
@stop --}}

@section('content')
    <p>Selamat datang</p>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
