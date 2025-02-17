<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviras</title>
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

    </style>
</head>
<div id="alert-container" style="position: fixed; top: 20px; right: 20px; z-index: 1050;"></div>
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
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-phone" style="font-size:13px;"> 021-22792541</i>| Panggilan/WA : 081278721976 (Marketing) |</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i> Akun Saya
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                            <li><a class="dropdown-item" href="#">Register</a></li>
                            <li><a class="dropdown-item" href="#">Login</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('daftar.keinginan')}}"><i class="fa-solid fa-heart"></i> Daftar Keinginnan ()</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i> Keranjang Belanja</a>
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

            <div class="container" style="display: flex; align-items: center; justify-content: space-between; position: relative; width: 100%;">
                    <!-- Logo -->
                    <img src="{{ asset('img/LOGO_AVIRAS_png.png') }}" alt="Logo BSM" style="height: 50px;">
                    <!-- end Logo -->
                    <!-- Search Box di Tengah -->
<div style="position: absolute; left: 50%; transform: translateX(-50%);">
    <form action="{{ route('home') }}" method="get" style="position: relative;">
        <input class="form-control" type="search" name="search" placeholder="Cari" aria-label="Search" style="width: 450px;" value="{{ request('search') }}">
        <button class="btn btn-outline-danger" type="submit" style="position: absolute; right: -40px; top: 0;">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div>

                    <!-- Button Cart -->
                    <button type="button" class="btn btn-dark btn-cart-count" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-cart-shopping"></i> 0 item - Rp 0/Hari
                    </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">

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
                        <div class="mt-3" id="modal-total">
                            <table style="width: 100%; border-collapse: collapse; text-align: left;">
                                <tr style="background-color: #f9f9f9;">
                                    <td style="padding: 10px; font-weight: bold;">Sub-Total</td>
                                    <td style="padding: 10px; text-align: right;" id="subtotal">Rp 0</td>
                                </tr>
                                <tr style="background-color: #f4f4f4;">
                                    <td style="padding: 10px; font-weight: bold;">Total</td>
                                    <td style="padding: 10px; text-align: right;" id="total">Rp 0</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button> -->
                            <button type="button" class="btn btn-dark"><i class="fa-solid fa-cart-shopping"></i> Pesanan</button>
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
<div class="container" style="display: flex; justify-content: center; align-items: center;">
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(45deg, red, black);">
        <div class="container-fluid">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="container">
                        <div class="container">
                                <ul class="navbar-nav">
                                    <li class="nav-item" style="margin-right: 2px;">
                                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Camera & Lensa</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Camera()</a></li>
                                            <li><a class="dropdown-item" href="#">Lensa()</a></li>
                                            <li><a class="dropdown-item" href="#">Drone()</a></li>
                                            <li><a class="dropdown-item" href="#">GoPro/ Action Cam()</a></li>
                                            <hr>
                                        </ul>
                                    </li>
                                    <li class="nav-item" style="margin-right: 2px;">
                                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Multicam System</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Paket Multicam()</a></li>
                                            <li><a class="dropdown-item" href="#">Switcher & Recorder()</a></li>
                                            <hr>
                                        </ul>
                                    </li>
                                    <li class="nav-item" style="margin-right: 2px;">
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
                                    <li class="nav-item" style="margin-right: 2px;">
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
                                    <li class="nav-item" style="margin-right: 2px;">
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
                                    <li class="nav-item" style="margin-right: 2px;">
                                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Rigging & Stage</a>
                                    </li>
                                    <li class="nav-item" style="margin-right: 2px;">
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
                                    <li class="nav-item" style="margin-right: 2px;">
                                        <a class="nav-link active" aria-current="page" href="#" style="font-size:13px; color: white;">Genset, Kipas, Ac & Other</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- End Navbar Kedua -->

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">   
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @stack('script')
   
</a>
<br>
<!-- Footer -->
<footer style="display: flex; justify-content: space-around; align-items: flex-start; background: linear-gradient(45deg, red, black); padding: 20px; flex-wrap: wrap; font-size: 14px;">
    <div class="footer-section" style="flex: 1; margin: 10px;">
        <h3 style="color: white; font-size: 16px;">Informasi</h3>
        <ul style="list-style: none; padding: 0; color: white;">
            <a href="{{ route('tentang.kami') }}" style="text-decoration: none; color: white;"><li>Tentang Kami</li></a>
            <a href="{{ route('informasi.pengiriman') }}" style="text-decoration: none; color: white;"><li>Informasi Pengiriman</li></a>
            <a href="{{ route('projek.dukungan') }}" style="text-decoration: none; color: white;"><li>Projek Dukungan</li></a>
            <a href="{{ route('cara.menyewa') }}" style="text-decoration: none; color: white;"><li>Cara Menyewa</li></a>
            <a href="" style="text-decoration: none; color: white;"><li>Ragam Rental</li></a>
            <a href="{{ route('acara.aviras') }}" style="text-decoration: none; color: white;"><li>Acara Aviras</li></a>
            <a href="" style="text-decoration: none; color: white;"><li>BSM Multimedia</li></a>
            <a href="" style="text-decoration: none; color: white;"><li>Studio Mavic</li></a>
        </ul>
        <hr style="color: white;">
        <p style="font-size: 14px; color: white;">Didukung oleh BSM Rental 2015</p>
        <p style="font-size: 14px; color: white;">Aviras 2025</p>
    </div>
    
    <div class="footer-section" style="flex: 1; margin: 10px;">
        <h3 style="color: white; font-size: 16px;">Layanan Pelanggan</h3>
        <ul style="list-style: none; padding: 0; color: white;">          
            <a href="{{ route('hubungi.kami') }}" style="text-decoration: none; color: white;"><li>Hubungi kami</li></a>
            <a href="{{ route('pengembalian') }}" style="text-decoration: none; color: white;"><li>Pengembalian</li></a>
            <a href="" style="text-decoration: none; color: white;"><li>Peta Situs</li></a>
        </ul>
    </div>
    
    <div class="footer-section" style="flex: 1; margin: 10px;">
        <h3 style="color: white; font-size: 16px;">Akun Saya</h3>
        <ul style="list-style: none; padding: 0; color: white;">          
            <a href="{{ route('profile') }}" style="text-decoration: none; color: white;"><li>Akun Saya</li></a>
            <a href="" style="text-decoration: none; color: white;"><li>Riwayat Pesanan</li></a>
            <a href="" style="text-decoration: none; color: white;"><li>Daftar Keinginan</li></a>
            <a href="" style="text-decoration: none; color: white;"><li>Buletin</li></a>
        </ul>
    </div>
    
    <div class="footer-contact-info" style="flex: 1; margin: 10px; text-align: center; color: white;">
        <h3 style="font-size: 16px;">Untuk Pemesanan Hubungi Kami di:</h3>
        <a href="" style="text-decoration: none; color: white;"><p style="font-size: 16px;"><i class="fa-brands fa-whatsapp"></i> 081278721976 (Marketing)</p></a>
        <a href="https://www.instagram.com/avirasofficial/" style="text-decoration: none; color: white;"><p style="font-size: 14px;"><i class="fa-brands fa-instagram"></i> @avirasofficial</p></a>
        <p style="font-size: 14px;"><b><span style="color: orange;">MURAH & MUDAH</span></b></p>
        <p style="font-size: 15px;"><b>Kami melayani pemesanan alat 24 JAM & Free Delivery untuk Wilayah DKI Jakarta *</b></p>       
    </div>
</footer>
<!-- End Footer -->

</body>
    <script>

        document.querySelector('[data-bs-target="#exampleModal"]').addEventListener('click', function (e) {
        const modal = document.querySelector('#exampleModal .modal-dialog');
        const buttonRect = e.target.getBoundingClientRect();
        const offsetX = 35;

        // Atur posisi modal
        modal.style.position = 'absolute';
        modal.style.top = `${buttonRect.bottom + window.scrollY}px`;
        modal.style.left = `${buttonRect.left - offsetX}px`;
        modal.style.margin = '0';
        });

        document.addEventListener('DOMContentLoaded', function () {
        const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');
        const alertContainer = document.getElementById('alert-container');
        const cartItems = [];
        const cartCountButton = document.querySelector('.btn-cart-count');
        const modalElement = document.getElementById('exampleModal'); 
        const modalInstance = new bootstrap.Modal(modalElement);

        // Fungsi untuk memperbarui jumlah item pada tombol keranjang
        function updateCartCount() {
            const itemCount = cartItems.length;
            const totalPrice = cartItems.reduce((total, item) => total + item.price, 0);
            cartCountButton.innerHTML = `<i class="fa-solid fa-cart-shopping"></i> ${itemCount} item - Rp ${totalPrice.toLocaleString()}/Hari`;
        }

        // Fungsi untuk memperbarui isi modal keranjang
        function updateModal() {
            const modalBody = document.querySelector('#exampleModal .modal-body');
            modalBody.innerHTML = '';
            cartItems.forEach((item, index) => {
                const formattedPrice = `Rp ${item.price.toLocaleString()}/Hari`;
                const itemHTML =  `
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <img src="${item.image}" alt="..." class="img-fluid me-3" style="height: 60px; width: 60px; object-fit: cover;">
                            <div>
                                <h5 class="mb-1">${item.name}</h5>
                                <p>${formattedPrice}</p>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-sm btn-delete ms-3" data-index="${index}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                `;

                modalBody.innerHTML += itemHTML;
            });

            const deleteButtons = modalBody.querySelectorAll('.btn-delete');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const index = this.getAttribute('data-index');
                    cartItems.splice(index, 1);
                    updateModal();
                    updateCartCount();
                });
            });
        }

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function () {
                const name = this.getAttribute('data-name');
                const rawPrice = this.getAttribute('data-price'); 
                const price = parseFloat(rawPrice.replace(/[^\d]/g, ''));
                const formattedPrice = `Rp ${price.toLocaleString()}/Hari`;
                const image = this.getAttribute('data-image');

                cartItems.push({ name, price, image });

                updateModal();
                updateCartCount();

                if (alertContainer) {
                    const alertHTML = `
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Sukses!</strong> Produk "${name}" berhasil ditambahkan ke keranjang.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`;
                    const alertElement = document.createElement('div');
                    alertElement.innerHTML = alertHTML;
                    alertContainer.appendChild(alertElement);
                } else {
                    console.error('Alert container tidak ditemukan.');
                }
            });
        });

        cartCountButton.addEventListener('click', function () {
            updateModal();
            modalInstance.show();
        });
    });
</script>

</html>
