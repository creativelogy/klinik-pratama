<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar" href="#">
            <img style="margin-left:10pt" src="../img/logo-nav.png" alt="" width="70%" height="25">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="true">
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
        @guest
            <form class="d-flex button-set">
                <button class="btn mr-2 login-btn btn-bulat login" style="border-radius: 50pt; width:90px; height:40px"
                    type="submit"><a href="/login">Login</a></button>
                <button class="btn btn-outline-dark btn-bulat register"
                    style="border:1px solid black; border-radius: 50pt; width:90px; height:40px" type="submit"><a
                        href="/register">Register</a></button>
            </form>
        @else
            <form id="logout-form" class="d-flex button-set" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn mr-2 login-btn btn-bulat login" style="border-radius: 50pt; width:90px; height:40px" type="submit">
                    Logout
                </button>
            </form>
        @endguest

    </div>
</nav>
