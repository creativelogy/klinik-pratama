@extends('layout/main')

@section('container')
<div class="content">
        <!--home bg---------------->
        <div class="home-background">
            <div class="main-text">
                <h1 class="text-center font-weight-bold headline-home">We Provide The Best Health<br>Services For You</h1>
                <p class="text-center desc-home" style="margin-top:30px;">Klik disini untuk melakukan reservasi</p>
                <!--btn------->
                <button type="button" class="btn btn-success mx-auto d-block login-btn" style="border-radius: 20pt; margin-top:15pt">Reservation</button>
            </div>
        </div>

        <div class="program" style="margin-top:-200px">
            <h2 style="margin-bottom:30px;">Program Unggulan</h2>
            <div class="slider owl-carousel" style="padding: 20px;">
                <div class="card mt-3 mb-3 pt-3 pb-3">
                    <div class="img"><img src="heart.jpg" style="height:180px; width:180px; margin:auto;"></div>
                    <div class="content">
                        <div class="title" style="margin-top:-30px; font-weight:bold;">Pengobatan Serangan Jantung</div>
                        <div class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod nec enim non semper.</div>
                        <div class="btn" style="margin-top:-8px;"><button style="background-color:#009c9c;">Read more</button></div>
                    </div>
                </div>
                <div class="card mt-3 mb-3 pt-3 pb-3">
                    <div class="img"><img src="brain.jpg" style="height:150px; width:150px; margin:auto; border-radius:0px;"></div>
                    <div class="content">
                        <div class="title" style="font-weight:bold;">Pengobatan Stroke</div>
                        <div class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod nec enim non semper.</div>
                        <div class="btn" style="margin-top:-8px;"><button style="background-color:#009c9c;">Read more</button></div>
                    </div>
                </div>
                <div class="card mt-3 mb-3 pt-3 pb-3">
                    <div class="img"><img src="orto.jpg" style="height:150px; width:150px; margin:auto; border-radius:0px;"></div>
                    <div class="content">
                        <div class="title" style="font-weight:bold;">Pengobatan Ortopedi</div>
                        <div class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod nec enim non semper.</div>
                        <div class="btn" style="margin-top:-8px;"><button style="background-color:#009c9c;">Read more</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="box">
            <div class="testi">
                <h3 style="font-weight:bold;">OUR TESTIMONIALS</h3>
                <p class="testi-desc">Saya sangat puas terhadap pelayanan di Klinik Pratama , dokter laktasinya sangat baik dalam melakukan komunikasi informasi dan edukasi kepada pasien. Saya diberitahu dan diajarkan bagaimana cara menyusui yang baik dan benar. Pun ketika anak saya ternyata mengalami tongue tie dan lip tie , Tim laktasi sudah mendiagnosis sejak bayi saya lahir sehingga dapat langsung diberikan tindakan. Proses menyusui berjalan lancar sehingga saya pun merasa nyaman dan senang selama menyusui anak saya. Alhamdulillah saat ini bayi kami sehat , pertumbuhan dan perkembangannya baik. Terimakasih Tim Laktasi Klinik Pratama !</p>
            </div>
            <div class="img-two">
            <img src="ibu.jpg" style="width:200px;">
            <p class="ibu">Ibu sahara</p>
            </div>
        </div> -->
        <div class="mt-5">
            <h2 class="text-center titlehome" style="margin-top:100px;">Powered By</h2>
            <p class="text-center text-muted desc-powered">1000+ Trusted Medical Organization Throughout Indonesia</p>
            <img class="rounded mx-auto d-block poweredlogo" src="../img/powered logo.png"  alt="">
        </div>
        <!--text---------------->
</div>
<script>
  $(".slider").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,  
    autoplayHoverpause: true,
  });
</script>

  @endsection