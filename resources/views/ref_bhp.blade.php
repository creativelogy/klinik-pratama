@extends('layout/main')

@section('title', 'BHP')
    <link rel="stylesheet" type="text/css" href="../css/ref_bhp.css">
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12"><br><br><br><br>
                <h1 class="mt-3">List</h1>
                <table class="table">

                    <tbody>
                        @foreach ($ref_bhp as $prwt)
                            <tr>
                                {{-- <th scope="row">{{$loop-> iteration}}</th> --}}
                                <div class="border">
                                    <td><img src="{{ $prwt->img_dir }}" class="isi catalog"> <br>
                                        <div class="name">
                                            {{ $prwt->nama }} <br><br>
                                        </div>
                                        {{-- <div class="harga">
                                            {{ $prwt->harga }}
                                        </div> --}}
                                    </td>
                                </div>
            </div>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    {{-- <tbody>
    @foreach ($ref_bhp as $prwt)
    {{$loop-> iteration}}
    <img src="{{$prwt-> img_dir}}">
    {{$prwt-> nama}}
    {{$prwt-> harga}}
    @endforeach
    </tbody> --}}



    </div>
@endsection
