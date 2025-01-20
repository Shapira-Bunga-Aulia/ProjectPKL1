<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar-nav .nav-item {
            position: relative;
        }

        .navbar-nav .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            padding: 10px;
            border: 1px solid #ddd;
            z-index: 1000;
        }

        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar-nav .dropdown-menu li {
            list-style: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-phone" style="font-size:13px;"> 021-22792541</i>| Call/WA : 081278721976 (Marketing) |</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i> My Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Register</a></li>
                            <li><a class="dropdown-item" href="#">Login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-heart"></i> Wish List ()</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i> Shopping Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-share"></i> Check-out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Search -->
    <br>
    <div class="container-fluid">
        <form class="d-flex justify-content-center align-items-center w-100" role="search">
            <!-- Logo -->
            <img src="{{ asset('img/logobsm.png') }}" alt="Logo BSM" style="width: 360px; height: 50px; margin-right: 10px;">
            <!-- end Logo -->
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 300px;">
            <button class="btn btn-outline-success" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button class="btn btn-dark ms-2" type="button" style="width: 230px; height: 40px;">
                <i class="fa-solid fa-cart-shopping"></i> 0 item(s)-Rp 0/Day
            </button>
        </form>
    </div>
    <!-- End Search -->
<br>
    <!-- Navbar Kedua -->
    <div class="container">
    <nav class="navbar navbar-expand-lg" style="background-color: steelblue; border-radius: 10px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Camera & Lensa</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Camera()</a></li>
                            <li><a class="dropdown-item" href="#">Lensa()</a></li>
                            <li><a class="dropdown-item" href="#">Drone()</a></li>
                            <li><a class="dropdown-item" href="#">GoPro/ Action Cam()</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Multicam System</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Paket Multicam()</a></li>
                            <li><a class="dropdown-item" href="#">Switcher & Recorder()</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Lighting</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Paket Lighting()</a></li>
                            <li><a class="dropdown-item" href="#">Parled()</a></li>
                            <li><a class="dropdown-item" href="#">Moving Beam()</a></li>
                            <li><a class="dropdown-item" href="#">Fresnel()</a></li>
                            <li><a class="dropdown-item" href="#">Follow Spot()</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Audio</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Audio Equipment()</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Monitor/TV & Videotron</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Monitor()</a></li>
                            <li><a class="dropdown-item" href="#">TV()</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Rigging & Stage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Livestreaming, Multimedia & Support</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Streaming Setup()</a></li>
                            <li><a class="dropdown-item" href="#">Support()</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Genset, Kipas, Ac & Other</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

    <!-- End Navbar Kedua -->

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    @stack('script')
   
</a>
<br>
    <footer style="display: flex; justify-content: space-around; align-items: flex-start; background-color: black; color: white; padding: 20px; flex-wrap: wrap; font-size: 14px;">
    <div class="footer-section" style="flex: 1; margin: 10px;">
        <h3 style="color: white; font-size: 16px;">Information</h3>
        <ul style="list-style: none; padding: 0; color: white;">
            <li>About Us</li>
            <li>Delivery Information</li>
            <li>Support Project</li>
            <li>How To Rent</li>
            <li>Ragam Rental</li>
            <li>BSM Event</li>
            <li>BSM Multimedia</li>
            <li>Mavic Studio</li>
        </ul>
        <hr>
        <p style="font-size: 14px;">Powered by BSM Rental 2015</p>
        <p style="font-size: 14px;">BSM Multimedia 2023</p>
    </div>
    
    <div class="footer-section" style="flex: 1; margin: 10px;">
        <h3 style="color: white; font-size: 16px;">Customer Service</h3>
        <ul style="list-style: none; padding: 0; color: white;">
            <li>Contact Us</li>
            <li>Returns</li>
            <li>Site Map</li>
        </ul>
    </div>
    
    <div class="footer-section" style="flex: 1; margin: 10px;">
        <h3 style="color: white; font-size: 16px;">My Account</h3>
        <ul style="list-style: none; padding: 0; color: white;">
            <li>My Account</li>
            <li>Order History</li>
            <li>Wish List</li>
            <li>Newsletter</li>
        </ul>
    </div>
    
    <div class="footer-contact-info" style="flex: 1; margin: 10px; text-align: center; color: white;">
        <h3 style="font-size: 16px;">Untuk Pemesanan Hubungi Kami di:</h3>
        <p style="font-size: 16px;"><i class="fa-brands fa-whatsapp"></i> 081278721976 (Marketing)</p>
        <p style="font-size: 14px;"><i class="fa-brands fa-instagram"></i> @bsmmultimedia</p>
        <p style="font-size: 14px;"><b><span style="color: orange;">MURAH & MUDAH</span></b></p>
        <p style="font-size: 15px;"><b>Kami melayani pemesanan alat 24 JAM & Free Delivery untuk Wilayah DKI Jakarta *</b></p>
        
    </div>
</footer>


</body>
</html>
