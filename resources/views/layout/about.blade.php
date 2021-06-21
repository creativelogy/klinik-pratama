<!doctype html>
<html lang="en">
  <head>
    <title>Klinik Pratama | About</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="../img/logoonly.png">

    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <div id="stickynav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <div class="container-fluid">
                        <a class="navbar" href="#">
                            <img style="margin-left:10pt" src="../img/logo-nav.png" alt="" width="70%" height="25">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" 
                                href="https://api.whatsapp.com/send?phone=628977887994&text=Saya%20ingin%20melakukan%20reservasi%20di%20Klinik%20Pratama!"
                                target="_blank">
                                Contact
                                </a>
                            </li>
                        </ul>
                        </div>
                        <form class="d-flex button-set">
                            <button class="btn mr-2 login-btn btn-bulat login" style="border-radius: 50pt; width:90px; height:40px" type="submit"><a href="/login">Login</a></button>
                            <button class="btn btn-outline-dark btn-bulat register" style="border:1px solid black; border-radius: 50pt; width:90px; height:40px" type="submit"><a href="/register">Register</a></button>
                        </form> 
                    </div>
        </nav>

        <div class="about-background">
            <div class="main-text">
                <h1 class="text-left font-weight-bold about-headline">About Us</h1>
                <p class="text-left about-desc" style="margin-top:30px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam 
                    <br>malesuada, ante nec sagittis dapibus, augue turpis porttitor justo, 
                    <br>quis mattis justo tortor nec odio. Sed nec massa iaculis, elementum 
                    <br>sem a, fermentum turpis. Nam at pellentesque metus. Orci varius 
                    <br>natoque penatibus et magnis dis parturient montes, nascetur.</p>
                    <br>
                <h3 class="text-left font-weight-bold text-count">3792<span class="tab2"></span>12.293<span class="tab3"></span>24/7</h3>
                <p class="text-left">Happy Patients<span class="tab1"></span>Performed Treatment<span class="tab1"></span>Open Clinic</p>
            </div>
        </div>
        <div class="label1">
            <div>
                <button type="button" class="btn btn-light reserve-button" style="border-radius: 20pt; width:130px">Reserve Now</button>
            </div>
        </div>
    
    <!--Content---------------->
    <!-- @yield('aboutus'); -->
        <section id="our-team">
            <div class="container-12">
                <div class="header">
                    <h1 style="font-weight: bold; font-size: 45px;">Our Team</h1>
                </div>
                <div class="sub-container">
                    <div class="teams">
                        <img src="../img/alif-2.jpg" alt="alif" style="border-radius: 50%;">
                            <div class="name">Khalifah Imam Ali</div>
                                <div class="desig">Developer</div>
                            <div class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in sunt 
                                molestiae eligendi? Vel amet reiciendis quia maxime? Accusantium </div>
                                <div class="social-links">
                                    <a href="https://www.linkedin.com/in/khalifah-imam-ali-2211701ba/"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://instagram.com/creativelogy"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a href="https://github.com/creativelogy"><i class="fa fa-github"></i></a>
                                </div>
                    </div>
                    <div class="teams">
                        <img src="../img/ghoza.jpg" alt="gesti" style="border-radius: 50%;">
                        <div class="name">Ghoza Nada Iqbal</div>
                        <div class="desig">Developer</div>
                        <div class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in sunt 
                        molestiae eligendi? Vel amet reiciendis quia maxime? Accusantium </div>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/ghoza-nada-iqbal/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com/ghozzza"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://github.com/ghozzza"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                    <div class="teams">
                            <img src="../img/syahrul-3.jpg" alt="syahrul" style="border-radius: 50%;">
                            <div class="name">Muhammad Syahrul Aulia</div>
                            <div class="desig">Developer</div>
                            <div class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in sunt 
                            molestiae eligendi? Vel amet reiciendis quia maxime? Accusantium </div>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/muhammad-syahrul-aulia-1619291a9/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com/syahrolus"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://github.com/syahrolus"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                    <div class="teams">
                            <img src="../img/erik.jpg" alt="syahrul" style="border-radius: 50%;">
                            <div class="name">Erikson Vri Aritonang</div>
                            <div class="desig">Developer</div>
                            <div class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in sunt 
                            molestiae eligendi? Vel amet reiciendis quia maxime? Accusantium </div>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/muhammad-syahrul-aulia-1619291a9/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com/syahrolus"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://github.com/syahrolus"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                    <div class="teams">
                            <img src="../img/krisna.jpg" alt="syahrul" style="border-radius: 50%;">
                            <div class="name">Krisna Sanjaya</div>
                            <div class="desig">Developer</div>
                            <div class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in sunt 
                            molestiae eligendi? Vel amet reiciendis quia maxime? Accusantium </div>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/muhammad-syahrul-aulia-1619291a9/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com/syahrolus"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://github.com/syahrolus"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="footers text-light pt-2 pb-5" style="background-color: rgb(31, 31, 31);">
            <div class="container pt-5">
                <div class="row">
                   
                    <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
                       <div class="footers-logo">
                           <img src="Assets/navigo-logo-white.png" alt="Logo" style="width:140px;">
                       </div>
                       <div class="footers-info mt-3">
                           <p>a navigation to your dream tour, explore and discover more experiences to be come true.</p>
                       </div>
                       <div class="social-icons"> 
                         <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                         <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                        <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
                        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
                    </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-2 footers-two" style="color: white;">
                       <h5>Home </h5>
                       <ul class="list-unstyled">
                       <li><a href="#home-intro">Home</a></li>
                       <li><a href="#vt">Virtual tour</a></li>
                       <li><a href="#galeri-id">Gallery</a></li>
                       <li><a href="#article-id">Articles</a></li>
                       <li><a href="#client-id">Testimony</a></li>
                      </ul>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
                       <h5>About Us </h5>
                       <ul class="list-unstyled">
                        <li><a href="About Us.html#abt-us">About</a></li>
                        <li><a href="About Us.html#our-team">Our Team</a></li>
                      </ul>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-2 footers-four">
                       <h5>Tourism Places </h5>
                       <ul class="list-unstyled">
                       <li><a href="Paket-Wisata.html">Nature</a></li>
                       <li><a href="Paket-Wisata.html">Adventure</a></li>
                       <li><a href="Paket-Wisata.html">Culture</a></li>
                       <li><a href="Paket-Wisata.html">Photography</a></li>
                      </ul>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-2 footers-five">
                       <h5>Contact </h5>
                       <ul class="list-unstyled">
                        <li><a href="https://api.whatsapp.com/send/?phone=628977887994&text=I+am+interested+in+the+tour+packages+that+Navigo+offers&app_absent=0" target="_blank">Whatsapp</a></li>
                      </ul>
                   </div>
                </div>
            </div>
        </section> -->
        <section class="copyright border">
             <div class="container">
                 <div class="row text-center">
                     <div class="col-md-12 pt-3">
                         <p class="text-muted">© 2021 Klinik Pratama Tugas Besar PemWeb</p>
                     </div>
                 </div>
             </div>
         </section>
        <!-- MAPS -->
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>