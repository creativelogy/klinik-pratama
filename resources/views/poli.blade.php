@extends('layout/main')

@section('title','Daftar Poli Bagian')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-10">
             <h1 class="mt-3">Daftar Poli Bagian</h1>
             <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Code Poli</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Biaya Daftar Poli</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($poli as $poli)
                    <tr>
                        <th scope="row">{{$loop-> iteration}}</th>
                        <td>{{$poli-> nama}}</td>
                        <td>{{$poli-> harga_pendaftaran}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
            </div>
        </div>
    </div>
  @endsection
