@extends('layout/main')

@section('title','Data Reservasi')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-10">
             <h1 class="mt-3">Daftar Reservasi</h1>
             <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Reservasi</th>
					<th scope="col">Kode Poli</th>
                    <th scope="col">Kode Dokter</th>					
                    <th scope="col">Dibuat oleh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservasi as $rsvs)
                    <tr>
                        <th scope="row">{{$loop-> iteration}}</th>
                        <td>{{$rsvs-> id_pasien}}</td>
                        <td>{{$rsvs-> tanggal_rencana_datang}}</td>
                        <td>{{$rsvs-> id_poli_bagian}}</td>
                        <td>{{$rsvs-> id_dokter}}</td>
                        <td>{{$rsvs-> created_by}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
            </div>
        </div>
    </div>
  @endsection
