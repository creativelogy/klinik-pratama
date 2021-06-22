@extends('layout/main')

@section('title', 'BHP')
    <link rel="stylesheet" type="text/css" href="../css/ref_bhp.css">
@section('container')

    {{-- @foreach ($ref_bhp as $isi)
        <div class="line">
            <img src="{{$isi -> img_dir}}" alt="1" class="content">
            <div class="name">
                <p>{{$isi -> nama}}</p> <br>
                <p>{{$isi -> harga}}</p>
            </div>
        </div>
    @endforeach --}}
    
    <div class="title">
        <p>BHP</p>
    </div>
    @foreach ($ref_bhp as $isi)
    <div class="line">
        <div class="content">
        <img src="{{$isi -> img_dir}}" alt="1" class="content">
        <div class="name">
            <p>{{$isi -> nama}}</p> <br>
            <p>{{$isi -> harga}}</p>
        </div>
    </div>

    <div class="line2">
        <div class="content">
        <img src="{{$isi -> img_dir}}" alt="1" class="content">
        <div class="name">
            <p>{{$isi -> nama}}</p> <br>
            <p>{{$isi -> harga}}</p>
        </div>
    </div>

    <div class="line3">
        <div class="content">
        <img src="{{$isi -> img_dir}}" alt="1" class="content">
        <div class="name">
            <p>{{$isi -> nama}}</p> <br>
            <p>{{$isi -> harga}}</p>
        </div>
    </div>

    <div class="line4">
        <div class="content">
        <img src="{{$isi -> img_dir}}" alt="1" class="content">
        <div class="name">
            <p>{{$isi -> nama}}</p> <br>
            <p>{{$isi -> harga}}</p>
        </div>
    </div>

    <div class="line5">
        <div class="content">
        <img src="{{$isi -> img_dir}}" alt="1" class="content">
        <div class="name">
            <p>{{$isi -> nama}}</p> <br>
            <p>{{$isi -> harga}}</p>
        </div>
    </div>

    <div class="line6">
        <div class="content">
        <img src="{{$isi -> img_dir}}" alt="1" class="content">
        <div class="name">
            <p>{{$isi -> nama}}</p> <br>
            <p>{{$isi -> harga}}</p>
        </div>
    </div>
    @endforeach



    {{-- @foreach ($ref_bhp as $prwt)
<tr>
    <th scope="row">{{$loop-> iteration}}</th>
    <td>{{$prwt-> nama}}</td>
    <td>{{$prwt-> harga}}</td>
    <td>{{$prwt-> created_by}}</td>
    <td>{{$prwt-> edited_by}}</td>
    <td>{{$prwt-> created_at}}</td>
    <td>{{$prwt-> updated_at}}</td>
</tr>
@endforeach --}}




    {{-- <tbody>
    @foreach ($ref_bhp as $prwt)
    {{$loop-> iteration}}
    <img src="{{$prwt-> img_dir}}">
    {{$prwt-> nama}}
    {{$prwt-> harga}}
    @endforeach
    </tbody> --}}




@endsection
