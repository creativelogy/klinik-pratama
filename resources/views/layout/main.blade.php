<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="/css/filestyle.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
	<!-- <div id="tab">
		<div id="kotak">
			<h1>KLINIK<img src="icon1.png" alt="icon klinik" style="width: 30px; height: 30px;">PRATAMA</h1>
		</div>
	</div>
	
	<hr>
	<div class="kotakbawah">	
		<img src="klinik pratama.jpg" alt="doctor" style="width: 800px;height: 430px;">
	</div> -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<h2>Klinik Pratama</h2>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<a class="nav-link active" href="/">Home </a>
				<a class="nav-link" href="/pasien">Pasien</a>
				<a class="nav-link" href="/perawat">Perawat</a>
			</div>
		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Klinik Pratama</h1>
			<p class="lead">Jl. Piknik Pagi no 82, Kec. Hutan Rimba, Kota Surakarta</p>
		</div>
	</div>

	<div class="container">
        @yield('container');
		<div class="row footer">
            <div class="col text-center">
                <p>© 2021 Copywriter by Kelompok 5</p>
            </div>
        </div>
	</div>

	<!-- <div class="wrapper">
		<img src="tirta.jpg" alt="dr.tirta" style="width: 50%; height: 50%;">
		<h2>dr.Dewa Kipas</h2>
		<p>spesialis pijet memijet
			<br>
			Jam 7:00-15:00 WIB
		</p>
	</div> -->
</body>

</html>