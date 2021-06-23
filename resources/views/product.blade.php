@extends('layout/mainProduct')

@section('title', 'Products')
<link rel="stylesheet" type="text/css" href="../css/product.css">

@section('container')

<div class="toppage">
    <h1>SAFE MEDICINE AND TRUSTED</h1>
</div>
<div class="d-flex d-row justify-content-between mt-5">
    <div class="d-flex flex-column justify-content-center m-5">
        <div class="medicine">
            <img src="../img/obat.png" alt="obat">
        </div>

        <div class="butmedicine">
            <div class="linktext">
                <a href="ref_obat"><p>Medicine</p></a>
            </div>
        </div>
    </div>


    <div class="d-flex flex-column justify-content-center m-5">
        <div class="bhp">
            <img src="../img/apd 1.png" alt="bhp">
        </div>

        <div class="butbhp">
            <div class="linktext2">
                <a href="ref_bhp"><p>BHP</p></a>
            </div>
        </div>
    </div>

</div>




@endsection