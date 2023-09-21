@extends('template.default')

@php 
$title ='Data Siswa';
$pretitle = 'Tambah Data';
@endphp

@section('body')

<div class="class">
    <div class="card-body">
    <h1>Edit siswa<h1>
   <div class="card">
    <div class="card-body">
        <form action="{{route('sekolah.simpan')}}"class=""method="post">
            @csrf

<div class="mb-3">
      <label class="form-label">Nama sekolah</label>
    <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah">
</div> 
<div class="mb-3">
      <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat">
</div> 
<div class="mb-3">
      <label class="form-label">Jurusan</label>
    <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan">
</div> 
<div class="mb-3">
      <label class="form-label">Jumlah guru</label>
    <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru">
</div> 
<div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>
</div>



@endsection