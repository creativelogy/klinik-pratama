@extends('layout/main')

@section('title','Daftar dokter')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-10">
             <h1 class="mt-3">Daftar Dokter</h1>
             <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Poli Bagian</th>
                    <th scope="col">Nomor Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dokter as $dr)
                    <tr>
                        <th scope="row">{{$loop-> iteration}}</th>
                        <td>{{$dr-> nama}}</td>
						<td>{{$dr-> id_poli_bagian}}</td>
                        <td>{{$dr-> no_telp}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
            </div>
        </div>
    </div>
  @endsection
