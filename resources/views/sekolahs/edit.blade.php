@extends('template.default')
@php 
$title ="Data Siswa";
$pretitle = "Edit Data";
@endphp

@section('body')

<div class="class">
    <div class="card-body">
   <div class="card">
    <div class="card-body">
        <form action="{{route('sekolah.update', $sekolahs->id)}}"class=""method="post">
            @csrf
            @method('PUT')


<div class="mb-3">
      <label class="form-label">Nama sekolah</label>
    <input type="text" class="form-control" name="nama_sekolah" 
    placeholder="Tulis Nama Sekolah" value="{{ $sekolahs->nama_sekolah}}" >
</div>
<div class="mb-3">
      <label class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat" value="{{ $sekolahs->alamat}}">
</div> 
<div class="mb-3">
      <label class="form-label">Jurusan</label>
    <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan" value="{{ $sekolahs->jurusan}}">
</div> 
<div class="mb-3">
      <label class="form-label">Jumlah guru</label>
    <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru"value="{{ $sekolahs->jumlah_guru}}">
</div> 
<div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>
</div>



@endsection