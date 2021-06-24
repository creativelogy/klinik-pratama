@extends('layout/main')

@section('title', 'Reservasi')
    <link rel="stylesheet" type="text/css" href="../css/create.css">

@section('container')

<div class="container">
	<h1>Reservasi Klinik Pratama</h1>
	<form action="{{ route('reservasi.store') }}" method="post">
        @csrf
		<h3>Data Pasien</h3>
		<div class="form-group">
			<input class="form-control" type="text" name="nama" placeholder="Nama Pasien">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name="nik" placeholder="NIK">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="alamat" id="keluhan" rows="2" placeholder="Alamat"></textarea>
		</div>
		<div class="form-row">
			<div class="col">
				<label for="tanggal">Tempat Lahir</label>	
				<input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir">
			</div>
			<div class="col">
				<label for="tanggal">Tanggal Lahir</label>	
				<input type="date" class="form-control" name="tanggal">
			</div>
		</div>
		<br/>
		<h3>Data Reservasi</h3>
		<div class="form-group">
			<input class="form-control" type="text" name="telp" placeholder="No telepon">
		</div>
		<div class="form-group">
			<label for="tanggal">Tanggal Reservasi</label>
			<input type="date" class="form-control" name="tgl" id="Tanggal">
		</div>
		<div class="form-row">
			<div class="col">
			<input type="text" class="form-control" name="codedoc" placeholder="Kode Dokter">
			<br/>
			<a class="btn btn-lg btn-block btn-warning" href="../dokter" role="button" target="_blank">Daftar Dokter</a>
			</div>
			<div class="col">
			<input type="text" class="form-control" name="codepol" placeholder="Kode Poli">
			<br/>
			<a class="btn btn-lg btn-block btn-warning" href="../poli" role="button" target="_blank">Daftar Poli</a>
			</div>
		</div>
		<br/>
		<div class="form-group">
			<textarea class="form-control" name="keluhan" id="keluhan" rows="3" placeholder="Keluhan Pasien"></textarea>
		</div>
		<br/>
		<button class="btn btn-primary" type="submit">Submit</button>
		<a href="{{ route('reservasi.index') }}" class="btn btn-default">Cancel</a>
	</form>

</div>
@endsection