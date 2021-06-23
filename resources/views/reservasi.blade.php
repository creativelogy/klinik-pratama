@extends('layout/main')

@section('title', 'Reservasi')
    <link rel="stylesheet" type="text/css" href="../css/reservasi.css">

@section('container')

<div class="toppage">
    <h1>Klinik Pratama</h1>
	<h4>Healthy live, favor life</h4>
</div>

<div class="tambah">
    <img src="../img/pesan.png" alt="tambah">
</div>

<div class="buttambah">
    <div class="linktext">
        <a href="reservasi/create"><p>Tambah Jadwal</p></a>
    </div>
</div>

<div class="lihat">
    <img src="../img/kalender.png" alt="lihat">
</div>

<div class="butlihat">
    <div class="linktext2">
        <a href="#"><p>Lihat Jadwal</p></a>
    </div>
</div>

@endsection