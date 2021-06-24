@extends('layout/mainProduct')

@section('title', 'Products')
<link rel="stylesheet" type="text/css" href="../css/product.css">

@section('container')


<div class="toppage">
    <h1>We Provide the best product</h1>

</div>

<div class="bhp">
    <img src="../img/apd 1.png" alt="tambah">
</div>

<div class="butbhp">
    <div class="linktext">
        <a href="/ref_bhp"><p>BHP</p></a>
    </div>
</div>

<div class="medicine">
    <img src="../img/obat.png" alt="lihat">
</div>

<div class="butmedicine">
    <div class="linktext2">
        <a href="/ref_obat"><p>Obat</p></a>
    </div>
</div>


@endsection