@extends('layout/main')

@section('title', 'Reservasi')
    <link rel="stylesheet" type="text/css" href="../css/create.css">

@section('container')

<div class="container">
	<h1>Reservasi Klinik Pratama</h1>
	<form action="{{ route('reservasi.store') }}" method="post">
        @csrf
		<div class="form-group">
			<input type="text" class="form-control" name="pasien" id="idpasien" placeholder="ID Pasien">
		</div>
		<input class="form-control" type="text" name="telp" placeholder="No telepon">
		<br/>
		<div class="form-group">
			<label for="tanggal">Tanggal Reservasi</label>
			<input type="date" class="form-control" name="tgl" id="Tanggal">
		</div>
		<div class="form-row">
			<div class="col">
			<input type="text" class="form-control" name="codedoc" placeholder="Kode Dokter">
			</div>
			<div class="col">
			<input type="text" class="form-control" name="codepol" placeholder="Kode Poli">
			</div>
		</div>
		<div class="form-group">
			<label for="Keluhan">Keluhan Pasien</label>
			<textarea class="form-control" name="status" id="Keluhan" rows="3"></textarea>
		</div>
		<div class="form-group">
			<label for="input">Direservasi oleh:</label>
	`		<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="input" id="inlineRadio1" value="User">
				<label class="form-check-label" for="inlineRadio1">User</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="input" id="inlineRadio2" value="Admin">
				<label class="form-check-label" for="inlineRadio2">Admin</label>
			</div>
		</div>
		<br/>
		<button class="btn btn-primary" type="submit">Save</button>
		<a href="{{ route('reservasi.index') }}" class="btn btn-default">Cancel</a>
	</form>

</div>
@endsection