@extends('layout/main')

@section('title','BHP')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-5">
         <h1 class="mt-3">Daftar BHP</h1>
         <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Created By</th>
                <th scope="col">Edited By</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ref_bhp as $prwt)
                <tr>
                    <th scope="row">{{$loop-> iteration}}</th>
                    <td>{{$prwt-> nama}}</td>
                    <td>{{$prwt-> harga}}</td>
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
