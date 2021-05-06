@extends('layout/main')

@section('title','Web Programming Unpas')

@section('container')
<div class="container">
        <div class="row">
            <div class="col-10">
             <h1 class="mt-3">Daftar Perawat</h1>
             <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Edited By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perawat as $prwt)
                    <tr>
                        <th scope="row">{{$loop-> iteration}}</th>
                        <td>{{$prwt-> nama}}</td>
                        <td>{{$prwt-> no_telp}}</td>
                        <td>{{$prwt-> created_by}}</td>
                        <td>{{$prwt-> edited_by}}</td>
                        <td>{{$prwt-> created_at}}</td>
                        <td>{{$prwt-> updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
            </div>
        </div>
    </div>
  @endsection
