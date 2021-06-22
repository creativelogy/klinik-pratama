@extends('layout/main')

@section('title', 'Medicine')
    <link rel="stylesheet" type="text/css" href="../css/ref_bhp.css">
@section('container')

    <div class="title">
        <p>Medicine</p>
    </div>

    @foreach ($ref_obat as $isi)
        @if ($isi->id == 1)
            <div class="line">
                <div class="content">
                    <img src="{{ $isi->obat_img }}" alt="1" class="content">
                    <div class="name">
                        <p>{{ $isi->nama }}</p> <br>
                        <p>{{ $isi->harga }}</p>
                    </div>
                </div>

            @elseif ($isi -> id == 2)
                <div class="line2">
                    <div class="content">
                        <img src="{{ $isi->obat_img }}" alt="2" class="content">
                        <div class="name">
                            <p>{{ $isi->nama }}</p> <br>
                            <p>{{ $isi->harga }}</p>
                        </div>
                    </div>

                @elseif ($isi -> id == 3)
                    <div class="line3">
                        <div class="content">
                            <img src="{{ $isi->obat_img }}" alt="3" class="content">
                            <div class="name">
                                <p>{{ $isi->nama }}</p> <br>
                                <p>{{ $isi->harga }}</p>
                            </div>
                        </div>

                    @elseif ($isi -> id == 4)
                        <div class="line4">
                            <div class="content">
                                <img src="{{ $isi->obat_img }}" alt="4" class="content">
                                <div class="name">
                                    <p>{{ $isi->nama }}</p> <br>
                                    <p>{{ $isi->harga }}</p>
                                </div>
                            </div>

                        @elseif ($isi -> id == 5)
                            <div class="line5">
                                <div class="content">
                                    <img src="{{ $isi->obat_img }}" alt="5" class="content">
                                    <div class="name">
                                        <p>{{ $isi->nama }}</p> <br>
                                        <p>{{ $isi->harga }}</p>
                                    </div>
                                </div>

                            @elseif ($isi -> id == 6)
                                <div class="line6">
                                    <div class="content">
                                        <img src="{{ $isi->obat_img }}" alt="6" class="content">
                                        <div class="name">
                                            <p>{{ $isi->nama }}</p> <br>
                                            <p>{{ $isi->harga }}</p>
                                        </div>
                                    </div>

        @endif
    @endforeach

@endsection

