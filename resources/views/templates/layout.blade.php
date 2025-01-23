<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Peralatan Event Terlengkap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

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

        <style>
    .modal {
        top: auto !important; /* Hilangkan properti default */
        bottom: auto !important;
        transform: none !important; /* Atur posisi default modal */
        margin-top: 10px; /* Jarak dari button */
    }
</style>

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
          
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 230px; height: 40px;" data-bs-placement="bottom">
                <i class="fa-solid fa-cart-shopping"></i> 0 item(s)-Rp 0/Day
            </button>
 

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center mb-3">
                        <img id="modalImage" src="" alt="..." class="img-fluid me-3" style="height: 60px; width: 60px; object-fit: cover;">
                        <div>
                            <h5 id="modalName" class="mb-1"></h5>
                            <p id="modalPrice"></p>
                        </div>
                    </div>
                    <div>
                    <table style="width: 100%; border-collapse: collapse; text-align: left;">
                        <tr style="background-color: #f9f9f9;">
                            <td style="padding: 10px; font-weight: bold;">Sub-Total</td>
                            <td style="padding: 10px; text-align: right;"></td>
                        </tr>
                        <tr style="background-color: #f4f4f4;">
                            <td style="padding: 10px; font-weight: bold;">Total</td>
                            <td style="padding: 10px; text-align: right;"></td>
                        </tr>
                    </table>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-light text-primary"><i class="fa-solid fa-cart-shopping"></i> Pesanan</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- end button trigger modal -->
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
                            <hr>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Multicam System</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Paket Multicam()</a></li>
                            <li><a class="dropdown-item" href="#">Switcher & Recorder()</a></li>
                            <hr>
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
                            <li><a class="dropdown-item" href="#">Mixer Lighting()</a></li>
                            <li><a class="dropdown-item" href="#">ARRI()</a></li>
                            <li><a class="dropdown-item" href="#">Godox()</a></li>
                            <li><a class="dropdown-item" href="#">Aputure()</a></li>
                            <li><a class="dropdown-item" href="#">NanLite()</a></li>
                            <li><a class="dropdown-item" href="#">Lighting Support()</a></li>
                            <hr>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Audio</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sound System()</a></li>
                            <li><a class="dropdown-item" href="#">Communication()</a></li>
                            <li><a class="dropdown-item" href="#">Music Instrument()</a></li>
                            <li><a class="dropdown-item" href="#">Wireless Control()</a></li>
                            <li><a class="dropdown-item" href="#">Mic()</a></li>
                            <li><a class="dropdown-item" href="#">Mixer & Recorder()</a></li>
                            <hr>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Monitor/TV & Videotron</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Monitor/TV()</a></li>
                            <li><a class="dropdown-item" href="#">Videotron/ LED Panel()</a></li>
                            <li><a class="dropdown-item" href="#">Projector()</a></li>
                            <li><a class="dropdown-item" href="#">Teleprompter()</a></li>
                            <li><a class="dropdown-item" href="#">Level LED()</a></li>
                            <hr>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Rigging & Stage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Livestreaming, Multimedia & Support</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Adapter & Converter()</a></li>
                            <li><a class="dropdown-item" href="#">Battery & Charger()</a></li>
                            <li><a class="dropdown-item" href="#">Cable / Kabel()</a></li>
                            <li><a class="dropdown-item" href="#">Grip & Textile()</a></li>
                            <li><a class="dropdown-item" href="#">Jib & Crane()</a></li>
                            <li><a class="dropdown-item" href="#">Laptop / Computer()</a></li>
                            <li><a class="dropdown-item" href="#">Memory()</a></li>
                            <li><a class="dropdown-item" href="#">RIG & Camera Stabilizer()</a></li>
                            <li><a class="dropdown-item" href="#">Slider()</a></li>
                            <li><a class="dropdown-item" href="#">Tripod & Monopod()</a></li>
                            <hr>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

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
<script>
    document.querySelector('[data-bs-target="#exampleModal"]').addEventListener('click', function (e) {
    const modal = document.querySelector('#exampleModal .modal-dialog');
    const buttonRect = e.target.getBoundingClientRect();
    const offsetX = 35; // Geser ke kiri sebanyak 20px

    // Atur posisi modal
    modal.style.position = 'absolute';
    modal.style.top = `${buttonRect.bottom + window.scrollY}px`; // Di bawah tombol
    modal.style.left = `${buttonRect.left - offsetX}px`; // Sejajar tombol, geser ke kiri
    modal.style.margin = '0';
});

    document.addEventListener('DOMContentLoaded', function () {
        const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Ambil data dari atribut data-*
                const name = this.getAttribute('data-name');
                const price = this.getAttribute('data-price');
                const image = this.getAttribute('data-image');

                // Masukkan data ke modal
                document.getElementById('modalName').textContent = name;
                document.getElementById('modalPrice').textContent = price;
                document.getElementById('modalImage').src = image;

                // Tampilkan modal
                const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
                cartModal.show();
            });
        });
    });
</script>
</html>
