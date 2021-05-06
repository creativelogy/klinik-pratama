@extends('layout/main')


@section('container')
<div class="row justify-content-center">
			<div class="col-10 info-panel ">
				<div class="row">
					<div class="col-lg text-center">
						<img src="covid1.png" alt="covid1" class="float-bottom">
						<h4>Test Covid-19</h4>
					</div>
					<div class="col-lg justify-content-center text-center">
						<img src="jiwa.png" alt="hires" class="float-bottom">
						<h4>Kesehatan Jiwa</h4>
					</div>
					<div class="col-lg text-center">
						<img src="cek.png" alt="cek" class="float-bottom">
						<h4>Cek Kesehatan</h4>
					</div>
					<div class="col-lg text-center">
						<img src="fisio.png" alt="fisio" class="float-bottom">
						<h4>Cek Fisioterapi</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- akhir info panel -->

		<div class="row workingspace d-flex justify-content-center">
			<div class="col-lg">
				<!-- <img src="img/workingspace.png" alt="workingspace" class="img-fluid"> -->
				<h3 >Doctor</h3>
				<div class="row">
					
					<div class="col-lg text-center">
						<img src="reisa.png" alt="reisa" class="float-bottom">
						<h4>dr. Reissa</h4>
						<p>beliau adalah dokter yang ahli di bidang<br>fisioterapi dan sekarang sedang menjadi relawan covid-19</p>
						<a href="https://api.whatsapp.com/send/?phone=6281234567890&text&app_absent=0" class="btn btn-primary tombol">Hubungi</a>
					</div>
					<div class="col-lg text-center">
						<img src="tirta.png" alt="tirta" class="float-bottom">
						<h4>dr. Tirta</h4>
						<p>beliau adalah dokter yang ahli di bidang<br>fisioterapi dan sekarang sedang menjadi relawan covid-19</p>
						<a href="https://api.whatsapp.com/send/?phone=6281234567890&text&app_absent=0" class="btn btn-primary tombol">Hubungi</a>
					</div>
					<div class="col-lg text-center">
						<img src="tompi.png" alt="tompi" class="float-bottom">
						<h4>dr. Tompi</h4>
						<p>beliau adalah dokter yang ahli di bidang<br>fisioterapi dan sekarang sedang menjadi relawan covid-19</p>
						<a href="https://api.whatsapp.com/send/?phone=6281234567890&text&app_absent=0" class="btn btn-primary tombol">Hubungi</a>
					</div>
					
				</div>
			</div>
		</div>
  @endsection
