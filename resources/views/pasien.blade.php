@extends('layout/main')

@section('title','Web Programming Unpas')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-10">
             <h1 class="mt-3">Daftar Pasien</h1>
             <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">No Rumah</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    <th scope="col">ID Kelurahan</th>
                    <th scope="col">ID Kecamatan</th>
                    <th scope="col">ID Kabupaten</th>
                    <th scope="col">ID Provinsi</th>
                    <th scope="col">ID User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $pas)
                    <tr>
                        <th scope="row">{{$loop-> iteration}}</th>
                        <td>{{$pas-> no_rm}}</td>
                        <td>{{$pas-> nama}}</td>
                        <td>{{$pas-> nik}}</td>
                        <td>{{$pas-> alamat}}</td>
                        <td>{{$pas-> tempat_lahir}}</td>
                        <td>{{$pas-> tgl_lahir}}</td>
                        <td>{{$pas-> rt}}</td>
                        <td>{{$pas-> rw}}</td>
                        <td>{{$pas-> id_kelurahan}}</td>
                        <td>{{$pas-> id_kecamatan}}</td>
                        <td>{{$pas-> id_kabupaten}}</td>
                        <td>{{$pas-> id_provinsi}}</td>
                        <td>{{$pas-> id_user}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
            </div>
        </div>
    </div>
  @endsection
