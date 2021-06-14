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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <h1>Our Team</h1>
                </div>
                <div class="sub-container">
                    <div class="teams">
                        <img src="../img/alif-2.jpg" alt="alif" style="border-radius: 50%;">
                            <div class="name">Khalifah Imam Ali</div>
                                <div class="desig">Creative Director</div>
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
                        <img src="../img/gesti-2.jpg" alt="gesti" style="border-radius: 50%;">
                        <div class="name">Gestina Ratna Pratiwi</div>
                        <div class="desig">Frontend Developer</div>
                        <div class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in sunt 
                        molestiae eligendi? Vel amet reiciendis quia maxime? Accusantium </div>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com/gestinapratiwi"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                    <div class="teams">
                            <img src="../img/syahrul-3.jpg" alt="syahrul" style="border-radius: 50%;">
                            <div class="name">Muhammad Syahrul Aulia</div>
                            <div class="desig">Backend Developer</div>
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
        <h1>sda</h1>
        <h3>2as</h3>
        <!-- MAPS -->
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>