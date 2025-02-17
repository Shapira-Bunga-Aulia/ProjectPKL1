@extends('templates.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out</title>
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .btn-primary {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #229ac8;
            background-image: linear-gradient(to bottom, #23a1d1, #1f90bb);
            background-repeat: repeat-x;
            border-color: #1f90bb #1f90bb #145e7a;
        }

        .btn {
            padding: 7.5px 12px;
            font-size: 12px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
        }

        
        /* style.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.breadcrumb {
    background-color: #f5f5f5;
    padding: 7px 20px;
    display: flex;
    align-items: center;
    border: 1px solid #ddd;
}

.breadcrumb ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.breadcrumb ul li {
    position: relative;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.breadcrumb ul li a {
    text-decoration: none;
    color: #23a1d1;;
    padding: 4px 15px; /* Sesuaikan padding agar navbar lebih tinggi */
    display: inline-block;
}

.breadcrumb ul li:not(:last-child)::after {
    content: "";
    position: absolute;
    right: -10px; /* Geser panah ke kanan */
    top: 0;
    bottom: 0;
    width: 5px; /* Lebar panah */
    background: linear-gradient(to right, rgba(255, 255, 255, 0), #ddd);
    height: 100%;
    transform: skewX(-45deg);
    z-index: -2; 
}

.breadcrumb ul li a:hover {
    text-decoration: underline;
}

/* Styling untuk gambar pengiriman */
.shipping-img {
    margin-top: 5px;
    margin-left: 3px;
    width: 60px; /* Ukuran gambar lebih kecil */
    height: auto; /* Menjaga proporsi gambar */
    border-radius: 8px; /* Sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan */
    transition: transform 0.3s ease; /* Transisi animasi saat hover */
}

.payment-img {
    margin-top: 9px;
    margin-bottom: 5px;
    margin-right: 5px;
    width: 50px; /* Ukuran gambar lebih kecil */
    height: auto; /* Menjaga proporsi gambar */
    border-radius: 8px; /* Sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan */
    transition: transform 0.3s ease; /* Transisi animasi saat hover */
}

/* Efek hover pada gambar */
.shipping-img:hover {
    transform: scale(1.05); /* Membesarkan sedikit gambar saat hover */
}


/* .img {
         margin: 0 40px;
         size: 5px
     } */
    </style>
</head>
<body>
    <div class="container mt-2">
        <nav class="breadcrumb navbar navbar-expand-lg" style="background-color: #f5f5f5; border-radius: 10px;">
            <ul>
                <li><a href="{{ route('home')}}"><span class="icon">🏠</span></a></li>
                <li><a href="{{ route('co')}}"style="font-size:15px">Checkout</a></li>
            </ul>
        </nav>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
        

    </div>
    <div class="container mt-5">
        <h1>Checkout</h1>
    <div class="accordion" id="checkoutAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-toggle="collapse" data-target="#checkoutStep1" aria-expanded="true" aria-controls="checkoutStep1">
                Step 1: Opsi Pembayaran
            </button>
        </h2>
        <div id="checkoutStep1" class="accordion-collapse collapse show" data-parent="#checkoutAccordion">
            <div class="accordion-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pelanggan Baru</h5>
                                        <p class="card-text"><b>Daftar Akun</b></p>
                                        <p class="card-text">                               
                                            Dengan membuat akun, Anda akan dapat berbelanja lebih cepat, mengetahui status pesanan, dan melacak pesanan yang telah Anda buat sebelumnya.
                                        </p>
                                        <a href="{{ route('register') }}" class="btn btn-dark">Continue</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('loginAuth')}}" method="POST">
                                        @csrf
                                        <h5 class="card-title">Sudah Punya Akun?</h5>
                                        <p class="card-text"><b>Masukkan Email dan Password Anda</b></p>
                                        <label for="email">E-Mail Address</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail Address">
                                        <br>
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                        <label for="password"><span style="color:#23a1d1;">Lupa Password?</span></label>
                                        <br><br>
                                        {{-- <a href="{{ route('home')}}" class="btn btn-dark">Login</a> --}}
                                        <button type="submit" class="btn btn-dark continue-btn" data-next="#checkoutStep2">Continue</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accordion Step 2 -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-toggle="collapse" data-target="#checkoutStep2" aria-expanded="false" aria-controls="checkoutStep2">
                Step 2: Rincian Alamat
            </button>
        </h2>
        <div id="checkoutStep2" class="accordion-collapse collapse" data-parent="#checkoutAccordion">
            <div class="accordion-body">
                <div class="card">
                    <div class="card-body">
                                <legend>Your Address Details</legend>
                                <hr>
                            <form action="{{ route('address')}}" method="POST">
                                @csrf
            
                                    @if (Session::get('success'))
                                    <div class="alert alert-success" id="alert-user">
                                    {{ Session::get('success') }}
                                    </div>
                                    @endif
                                
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                <div class="row mb-3">
                                    <label for="recipient_name"><span style="color: red">* </span>Nama Penerima</label>
                                    <div class="col-12">
                                        <input name="recipient_name" id="recipient_name" class="form-control" placeholder="Masukkan nama penerima"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone_number"><span style="color: red">* </span>Nomor Telepon</label>
                                    <div class="col-12">
                                        <input name="phone_number" id="phone_number" class="form-control" placeholder="Nomor Telepon"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address1"><span style="color: red">* </span>Alamat 1</label>
                                    <div class="col-12">
                                        <input type="text" name="address1" id="address1" class="form-control" placeholder="Alamat 1" required>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="address2">Alamat 2</label>
                                    <div class="col-12">
                                        <input type="text" name="address2" id="address2" class="form-control" placeholder="Alamat 2">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="postcode"><span style="color: red">* </span>Kode Pos</label>
                                    <div class="col-12">
                                        <input name="postcode" id="postcode" class="form-control" placeholder="Kode Pos"></input>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="province" class="form-label"><span style="color: red">* </span>Provinsi</label>
                                    <select name="province" id="province" class="form-select">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>
                
                                <div class="mb-3">
                                    <label for="regency" class="form-label"><span style="color: red">* </span>Kabupaten / Kota</label>
                                    <select name="regency" id="regency" class="form-select">
                                        <option value="">Pilih Kabupaten / Kota</option>
                                    </select>
                                </div>
                
                                <div class="mb-3">
                                    <label for="subdistrict" class="form-label"><span style="color: red">* </span>Kecamatan</label>
                                    <select name="subdistrict" id="subdistrict" class="form-select">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                
                                <div class="mb-3">
                                    <label for="village" class="form-label"><span style="color: red">* </span>Desa / Kelurahan</label>
                                    <select name="village" id="village" class="form-select">
                                        <option value="">Pilih Desa / Kelurahan</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-dark continue-btn" data-next="#checkoutStep3">Continue</button>
                    </form>
                </div>
             </div>                
        </div>
    </div>
</div>

    {{-- accordion 3 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#checkoutStep3" aria-expanded="false" aria-controls="checkoutStep3">
                Step 3: Rincian Pengiriman
            </button>
        </h2>
        <div id="checkoutStep3" class="accordion-collapse collapse" data-parent="#checkoutAccordion">
            <div class="accordion-body">
                <form>
                    <!-- Pilihan alamat yang sudah ada -->
                    <input type="radio" id="register" name="checkout" value="register" onclick="toggleSelection('existing')">
                    <label for="register">Saya ingin menggunakan alamat yang sudah ada</label><br>
                    
                    <!-- Dropdown daftar alamat -->
                    {{-- <select name="address" id="address">
                        <option value="">Pilih Alamat</option>
                        @foreach ($addresses as $address)
                        <option value="{{ $address->id }}">
                        {{ $address->number}}, {{ $address->village }}, {{$address->subdistrict }}, {{ $address->regency }}, {{$address->province }}, {{ $address->postcode}}
                        </option>
                        @endforeach
                    </select> --}}
                    {{-- @if(isset($addresses) && $addresses->isNotEmpty())
                    <select name="address" id="address">
                        <option value="">Pilih Alamat</option>
                        @foreach ($addresses as $address)
                            <option value="{{ $address->id }}">
                                {{ $address->number }}, {{ $address->village }}, {{ $address->subdistrict }}, 
                                {{ $address->regency }}, {{ $address->province }}, {{ $address->postcode }}
                            </option>
                        @endforeach
                    </select>
                    @else
                        <p>Tidak ada alamat tersedia</p>
                    @endif --}}
                    @if(isset($addresses) && $addresses->isNotEmpty())
                        <select name="address" id="address">
                            <option value="">Pilih Alamat</option>
                            @foreach ($addresses as $address)
                                <optgroup label="Alamat 1">
                                    <option value="{{ $address->id }}">
                                        {{ $address->address1 }},
                                        {{ json_decode($address->village)->name }},
                                        {{ json_decode($address->subdistrict)->name }},
                                        {{ json_decode($address->regency)->name }},
                                        {{ json_decode($address->province)->name }},
                                        {{ $address->postcode }}
                                    </option>
                                </optgroup>

                                    @if($address->address2)
                                    <optgroup label="Alamat 2">
                                        <option value="{{ $address->id }}">
                                            {{ $address->address2 }},
                                            {{ json_decode($address->village)->name }},
                                            {{ json_decode($address->subdistrict)->name }},
                                            {{ json_decode($address->regency)->name }},
                                            {{ json_decode($address->province)->name }},
                                            {{ $address->postcode }}
                                        </option>
                                    @endif
                                </optgroup>
                            @endforeach
                        </select>
                    @endif                
                    <br>
                    <br>
    
                    <!-- Button Continue untuk alamat yang sudah ada -->
                    <div id="continue-button" style="display: none;">
                        <button type="submit" class="btn btn-dark continue-btn" data-next="#checkoutStep4">Continue</button>
                    </div>
                    <br>
                
                    <!-- Pilihan alamat baru -->
                    <input type="radio" id="newaddress" name="checkout" value="new" onclick="toggleSelection('new')">
                    <label for="newaddress">Saya ingin menggunakan alamat baru</label><br>
                
                    <!-- Form alamat baru -->
                    <div id="newAddressFields" class="container mt-4" style="display: none;">
                        <div class="row mb-3">
                            <label for="recipient_name"><span style="color: red">* </span>Nama Penerima</label>
                            <div class="col-12">
                                <input name="recipient_name" id="new_recipient_name" class="form-control" placeholder="Masukkan nama penerima">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telephone"><span style="color: red">* </span>Nomor Telepon</label>
                            <div class="col-12">
                                <input name="telephone" id="telephone" class="form-control" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address1"><span style="color: red">* </span>Alamat 1</label>
                            <div class="col-12">
                                <input name="address1" id="new_address" class="form-control" placeholder="Alamat 1">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kodepos"><span style="color: red">* </span>Kode Pos</label>
                            <div class="col-12">
                                <input name="kodepos" id="kodepos" class="form-control" placeholder="Kode Pos">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="new_province" class="form-label">Provinsi</label>
                            <select name="new_province" id="new_province" class="form-select">
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="new_regency" class="form-label">Kabupaten / Kota</label>
                            <select name="new_regency" id="new_regency" class="form-select">
                                <option value="">Pilih Kabupaten / Kota</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="new_subdistrict" class="form-label">Kecamatan</label>
                            <select name="new_subdistrict" id="new_subdistrict" class="form-select">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="new_village" class="form-label">Desa</label>
                            <select name="new_village" id="new_village" class="form-select">
                                <option value="">Pilih Desa / Kelurahan</option>
                            </select>
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="recipient_name"><span style="color: red">* </span>Nama Penerima</label>
                            <div class="col-12">
                                <input name="recipient_name" id="recipient_name" class="form-control" placeholder="Masukkan nama penerima"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone_number"><span style="color: red">* </span>Nomor Telepon</label>
                            <div class="col-12">
                                <input name="phone_number" id="phone_number" class="form-control" placeholder="Nomor Telepon"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address1"><span style="color: red">* </span>Alamat</label>
                            <div class="col-12">
                                <input type="text" name="address1" id="address1" class="form-control" placeholder="Alamat 1" required>
                            </div>
                        </div>
                         --}}
                        {{-- <div class="row mb-3">
                            <label for="address2">Alamat 2</label>
                            <div class="col-12">
                                <input type="text" name="address2" id="address2" class="form-control" placeholder="Alamat 2">
                            </div>
                        </div>
                         --}}
                        {{-- <div class="row mb-3">
                            <label for="postcode"><span style="color: red">* </span>Kode Pos</label>
                            <div class="col-12">
                                <input name="postcode" id="postcode" class="form-control" placeholder="Kode Pos"></input>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="province" class="form-label"><span style="color: red">* </span>Provinsi</label>
                            <select name="province" id="province" class="form-select">
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>
        
                        <div class="mb-3">
                            <label for="regency" class="form-label"><span style="color: red">* </span>Kabupaten / Kota</label>
                            <select name="regency" id="regency" class="form-select">
                                <option value="">Pilih Kabupaten / Kota</option>
                            </select>
                        </div>
        
                        <div class="mb-3">
                            <label for="subdistrict" class="form-label"><span style="color: red">* </span>Kecamatan</label>
                            <select name="subdistrict" id="subdistrict" class="form-select">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
        
                        <div class="mb-3">
                            <label for="village" class="form-label"><span style="color: red">* </span>Desa / Kelurahan</label>
                            <select name="village" id="village" class="form-select">
                                <option value="">Pilih Desa / Kelurahan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark continue-btn" data-next="#checkoutStep4">Continue</button> --}}
                
                        <!-- Button Continue untuk alamat baru -->
                        <button type="submit" class="btn btn-dark continue-btn" data-next="#checkoutStep4">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- accordion 4 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#checkoutStep4" aria-expanded="false" aria-controls="checkoutStep4">
                Step 4: Metode Pengiriman
            </button>
        </h2>
        <div id="checkoutStep4" class="accordion-collapse collapse show" data-parent="#checkoutAccordion">
        <div class="card">
            <div class="card-body">
                {{-- <p>Silakan pilih metode pengiriman yang diinginkan untuk digunakan pada pesanan ini.</p>
                <p><b>Flat Rate</b></p> --}}

                {{-- @if($shippingMethods->count() > 0) --}}
                {{-- <form action="{{ route('shipping.store') }}" method="POST">
                    @csrf
                    <p>Silakan pilih metode pengiriman yang diinginkan untuk digunakan pada pesanan ini.</p>

                    <select name="shipping_method" class="form-control">
                        <option value="">-- Pilih Metode Pengiriman --</option>
                        @foreach ($shippingMethods as $method)
                            <option value="{{ $method->id }}">
                                {{ $method->name }} - Rp{{ number_format($method->cost) }} ({{ $method->estimated_days }} hari)
                            </option>
                        @endforeach
                    </select>
                </form> --}}
            {{-- @else
                <p>Tidak ada metode pengiriman yang tersedia.</p>
            @endif --}}

                {{-- <form action="{{ route('shipping.store') }}" method="POST">
                    @csrf
                    <p>Silakan pilih metode pengiriman yang diinginkan untuk digunakan pada pesanan ini.</p>
                
                    <select name="shipping_method" class="form-control">
                        <option value="">-- Pilih Metode Pengiriman --</option>
                        @foreach ($shippingMethods as $method)
                            <option value="{{ $method->id }}">
                                {{ $method->name }} - Rp{{ number_format($method->cost) }} ({{ $method->estimated_days }} hari)
                            </option>
                        @endforeach
                    </select>
                
                    <br>
                    <label for="coment"><b>Catatan:</b></label> <br>
                    <textarea name="coment" id="coment" cols="15" rows="8" class="form-control"></textarea> <br>
                
                    <button type="submit" class="btn btn-dark continue-btn">Continue</button>
                </form> --}}
                

                <form action="{{ route('shipping.store')}}" method="POST">
                    @csrf
                    <p>Silakan pilih metode pengiriman yang diinginkan untuk digunakan pada pesanan ini.</p>
                
                    <input type="radio" id="jnt" name="name" value="jnt">
                    <label for="jnt">
                        <img src="{{ asset('img/jnt.jpg')}}" class="shipping-img">
                    </label><br>
                    <br>
                    <input type="radio" id="jne" name="name" value="jne">
                    <label for="jne">
                        <img src="{{ asset('img/jne.jpg')}}" class="shipping-img">
                    </label><br>
                
                <br>
                {{-- <label for="coment"><b>Catatan:</b></label> <br>
                <textarea name="coment" id="coment" cols="15" rows="8" class="form-control"></textarea> <br> --}}
                <button type="submit" class="btn btn-dark continue-btn" data-next="#checkoutStep5">Continue</button>
            </form>


            </div>
        </div>
    </div>

    {{-- accordion 5 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#checkoutStep5" aria-expanded="false" aria-controls="checkoutStep5">
                Step 5: Metode Pembayaran
            </button>
        </h2>
        <div id="checkoutStep5" class="accordiyon-collapse collapse show" data-parent="#checkoutAccordion">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('payment.store')}}" method="POST">
                        @csrf
                        <p>Silakan pilih metode pembayaran yang ingin digunakan pada pesanan ini.</p>
        
                        <!-- Pilihan Transfer Bank -->
                        <div>
                            <input type="radio" id="transfer" name="name" value="transfer">
                            <label for="transfer">
                                <img src="{{ asset('img/m-banking.png')}}" class="payment-img">
                                Transfer Bank
                            </label>
                        </div>
        
                        <!-- Detail Transfer Bank (Hidden by Default) -->
                        <div id="transferDetails" style="display: none; margin-top: 10px;">
                            <p><b>Nomor Rekening:</b> 1234-5678-9012 (Bank XYZ)</p>
                            <label for="buktiPembayaran"><b>Upload Bukti Pembayaran:</b></label>
                            <input type="file" id="buktiPembayaran" name="bukti" class="form-control">
                        </div>
        
                        <!-- Pilihan COD -->
                        <div>
                            <input type="radio" id="cod" name="name" value="cod">
                            <label for="cod">
                                <img src="{{ asset('img/cod.png')}}" class="payment-img">
                                Cash On Delivery
                            </label>
                        </div>
                    
        
                    <br>
                    {{-- <label for="coment"><b>Catatan</b></label> <br>
                    <textarea name="coment" id="coment" cols="15" rows="8" class="form-control"></textarea> <br> --}}
        
                    <div class="row mb-3">
                        <div class="col-md-12 d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-dark continue-btn" data-next="#checkoutStep6">Continue</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        {{-- <div id="checkoutStep5" class="accordiyon-collapse collapse show" data-parent="#checkoutAccordion">
        <div class="card">
            <div class="card-body">
               
                <form action="/action_page.php">
                    <p>Silakan pilih metode pembayaran yang ingin digunakan pada pesanan ini.</p>
                    <input type="radio" id="transfer" name="fav_language" value="transfer">
                    <label for="transfer">
                       
                        <img src="{{ asset('img/transfer.png')}}" class="payment-img">
                        Transfer Bank
                    </label><br>
                    <br>
                
                    <input type="radio" id="cod" name="fav_language" value="cod">
                    <label for="cod">
                        
                        <img src="{{ asset('img/cod.png')}}" class="payment-img">
                        Cash On Delivery
                    </label><br>
                </form>
                <br>
                <label for="coment"><b>Catatan</b></label> <br>
                <textarea name="coment" id="coment" cols="15" rows="8" class="form-control"></textarea> <br>
                <div class="row mb-3">
                    <div class="col-md-12 d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-dark continue-btn" data-next="#checkoutStep6">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

    {{-- accordion 6 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#checkoutStep6" aria-expanded="false" aria-controls="checkoutStep6">
                Step 6: Konfirmasi Pesanan
            </button>
        </h2>
        <div id="checkoutStep6" class="accordion-collapse collapse show" data-parent="#checkoutAccordion">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Model</th>
                                <th scope="col">Kuantitas</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <div class="container mt-5">
                            <table class="table table-bordered d-flex justify-end justify-content-end">
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-end"><strong>Sub-Total:</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-end"><strong>Flat Shipping Rate:</strong></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-end"><strong>Total:</strong></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-dark">Confirm Order</button>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection

@push('script')
    <script>
          $(document).ready(function() {
            if ($("#toast").length) {
                var toast = new bootstrap.Toast(document.getElementById('toast'));
                toast.show();
            }

            $.ajax({
        method: "GET",
        url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
        dataType: "json",
        success: function(response) {
            response.forEach(function(province) {
                $('#province').append('<option value="' + province.id + '" data-name="' + province.name + '">' + province.name + '</option>');
            });
        },
        error: function() {
            alert("Gagal memuat data provinsi!");
        }
    });

    // Enable regency when province is selected
    $('#province').on('change', function() {
        let provinceId = $(this).val();
        let provinceName = $('#province option:selected').data('name');
        if (provinceId) {
            $('#regency').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
            $('#subdistrict, #village').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Kecamatan/Desa</option>');
            $.ajax({
                method: "GET",
                url: `https:www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinceId}.json`,
                dataType: "json",
                success: function(response) {
                    $('#regency').html('<option value="" disabled selected hidden>Pilih Kabupaten</option>');
                    response.forEach(function(regency) {
                        $('#regency').append('<option value="' + regency.id + '" data-name="' + regency.name + '">' + regency.name + '</option>');
                    });
                },
                error: function() {
                    alert("Gagal memuat data kabupaten!");
                }
            });
        }
    });

    // Enable subdistrict when regency is selected
    $('#regency').on('change', function() {
        let regencyId = $(this).val();
        let regencyName = $('#regency option:selected').data('name');
        if (regencyId) {
            $('#subdistrict').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
            $('#village').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Desa</option>');
            $.ajax({
                method: "GET",
                url: `https:www.emsifa.com/api-wilayah-indonesia/api/districts/${regencyId}.json`,
                dataType: "json",
                success: function(response) {
                    $('#subdistrict').html('<option value="" disabled selected hidden>Pilih Kecamatan</option>');
                    response.forEach(function(subdistrict) {
                        $('#subdistrict').append('<option value="' + subdistrict.id + '" data-name="' + subdistrict.name + '">' + subdistrict.name + '</option>');
                    });
                },
                error: function() {
                    alert("Gagal memuat data kecamatan!");
                }
            });
        }
    });

    // Enable village when subdistrict is selected
    $('#subdistrict').on('change', function() {
        let subdistrictId = $(this).val();
        let subdistrictName = $('#subdistrict option:selected').data('name');
        if (subdistrictId) {
            $('#village').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
            $.ajax({
                method: "GET",
                url: `https:www.emsifa.com/api-wilayah-indonesia/api/villages/${subdistrictId}.json`,
                dataType: "json",
                success: function(response) {
                    $('#village').html('<option value="" disabled selected hidden>Pilih Desa</option>');
                    response.forEach(function(village) {
                        $('#village').append('<option value="' + village.id + '" data-name="' + village.name + '">' + village.name + '</option>');
                    });
                },
                error: function() {
                    alert("Gagal memuat data desa!");
                }
            });
        }
    });

    $.ajax({
        method: "GET",
        url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
        dataType: "json",
        success: function(response) {
            response.forEach(function(new_province) {
                $('#new_provinceId').append('<option value="' + new_province.id + '" data-name="' + new_province.name + '">' + new_province.name + '</option>');
            });
        },
        error: function() {
            alert("Gagal memuat data provinsi!");
        }
    });

    // Enable regency when province is selected
    $('#new_provinceId').on('change', function() {
        let new_provinceId = $(this).val();
        let new_provinceName = $('#new_provinceId option:selected').data('name');
        if (new_provinceId) {
            $('#new_regencyId').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
            $('#new_subdistrictId, #new_villageId').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Kecamatan/Desa</option>');
            $.ajax({
                method: "GET",
                url: `https:www.emsifa.com/api-wilayah-indonesia/api/regencies/${new_provinceId}.json`,
                dataType: "json",
                success: function(response) {
                    $('#new_regencyId').html('<option value="" disabled selected hidden>Pilih Kabupaten</option>');
                    response.forEach(function(new_regency) {
                        $('#new_regencyId').append('<option value="' + new_regency.id + '" data-name="' + new_regency.name + '">' + new_regency.name + '</option>');
                    });
                },
                error: function() {
                    alert("Gagal memuat data kabupaten!");
                }
            });
        }
    });

    // Enable subdistrict when regency is selected
    $('#new_regencyId').on('change', function() {
        let new_regencyId = $(this).val();
        let new_regencyName = $('#new_regencyId option:selected').data('name');
        if (new_regencyId) {
            $('#new_subdistrictId').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
            $('#new_villageId').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Desa</option>');
            $.ajax({
                method: "GET",
                url: `https:www.emsifa.com/api-wilayah-indonesia/api/districts/${new_regencyId}.json`,
                dataType: "json",
                success: function(response) {
                    $('#new_subdistrictId').html('<option value="" disabled selected hidden>Pilih Kecamatan</option>');
                    response.forEach(function(new_subdistrict) {
                        $('#new_subdistrictId').append('<option value="' + new_subdistrict.id + '" data-name="' + new_subdistrict.name + '">' + new_subdistrict.name + '</option>');
                    });
                },
                error: function() {
                    alert("Gagal memuat data kecamatan!");
                }
            });
        }
    });

    // Enable village when subdistrict is selected
    $('#new_subdistrictId').on('change', function() {
        let new_subdistrictId = $(this).val();
        let new_subdistrictName = $('#new_subdistrictId option:selected').data('name');
        if (new_subdistrictId) {
            $('#new_villageId').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
            $.ajax({
                method: "GET",
                url: `https:www.emsifa.com/api-wilayah-indonesia/api/villages/${new_subdistrictId}.json`,
                dataType: "json",
                success: function(response) {
                    $('#new_villageId').html('<option value="" disabled selected hidden>Pilih Desa</option>');
                    response.forEach(function(new_village) {
                        $('#new_villageId').append('<option value="' + new_village.id + '" data-name="' + new_village.name + '">' + new_village.name + '</option>');
                    });
                },
                error: function() {
                    alert("Gagal memuat data desa!");
                }
            });
        }
    });

    // When form is submitted, collect ID and Name of selected items
    $('form').on('submit', function(e) {
        e.preventDefault();  // Prevent form from submitting immediately

        let province = JSON.stringify({
            id: $('#province').val(),
            name: $('#province option:selected').data('name')
        })
        let regency = JSON.stringify({
            id: $('#regency').val(),
            name: $('#regency option:selected').data('name')
        });
        let subdistrict = JSON.stringify({
            id: $('#subdistrict').val(),
            name: $('#subdistrict option:selected').data('name')
        });
        let village = JSON.stringify({
            id: $('#village').val(),
            name: $('#village option:selected').data('name')
        });

        let new_provinceId = JSON.stringify({
            id: $('#new_provinceId').val(),
            name: $('#new_provinceId option:selected').data('name')
        })
        let new_regencyId = JSON.stringify({
            id: $('#new_regencyId').val(),
            name: $('#new_regencyId option:selected').data('name')
        });
        let new_subdistrictId = JSON.stringify({
            id: $('#new_subdistrictId').val(),
            name: $('#new_subdistrictId option:selected').data('name')
        });
        let new_villageId = JSON.stringify({
            id: $('#new_villageId').val(),
            name: $('#new_villageId option:selected').data('name')
        });

        // Add the values to hidden inputs in the form (you can create hidden inputs for these fields)
        $('<input>').attr({
            type: 'hidden',
            name: 'province',
            value: province
        }).appendTo('form');
        $('<input>').attr({
            type: 'hidden',
            name: 'regency',
            value: regency
        }).appendTo('form');
        $('<input>').attr({
            type: 'hidden',
            name: 'subdistrict',
            value: subdistrict
        }).appendTo('form');
        $('<input>').attr({
            type: 'hidden',
            name: 'village',
            value: village
        }).appendTo('form');

        $('<input>').attr({
            type: 'hidden',
            name: 'new_province',
            value: province
        }).appendTo('form');
        $('<input>').attr({
            type: 'hidden',
            name: 'new_regency',
            value: regency
        }).appendTo('form');
        $('<input>').attr({
            type: 'hidden',
            name: 'new_subdistrict',
            value: subdistrict
        }).appendTo('form');
        $('<input>').attr({
            type: 'hidden',
            name: 'new_villageId',
            value: village
        }).appendTo('form');


        // Submit the form
        this.submit();
    });
        });
    //     $(document).ready(function() {
    //         if ($("#toast").length) {
    //             var toast = new bootstrap.Toast(document.getElementById('toast'));
    //             toast.show();
    //         }

    //         $.ajax({
    //     method: "GET",
    //     url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
    //     dataType: "json",
    //     success: function(response) {
    //         response.forEach(function(province) {
    //             $('#province').append('<option value="' + province.id + '" data-name="'
    //              + province.name + '">' + province.name + '</option>');
    //         });
    //     },
    //     error: function() {           
    //         alert("Gagal memuat data provinsi!");
    //     }
    // });

    // // Enable regency when province is selected
    // $('#province').on('change', function() {
    //     let provinceId = $(this).val();
    //     let provinceName = $('#province option:selected').data('name');
    //     if (provinceId) {
    //         $('#regency').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
    //         $('#subdistrict, #village').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Kecamatan</option>');
    //         $.ajax({
    //             method: "GET",
    //             url: `https:www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinceId}.json`,
    //             dataType: "json",
    //             success: function(response) {
    //                 $('#regency').html('<option value="" disabled selected hidden>Pilih Kabupaten</option>');
    //                 response.forEach(function(regency) {
    //                     $('#regency').append('<option value="' + regency.id + '" data-name="' + regency.name + '">' + regency.name + '</option>');
    //                 });
    //             },
    //             error: function() {
    //                 alert("Gagal memuat data kabupaten!");
    //             }
    //         });
    //     }
    // });

    // // Enable subdistrict when regency is selected
    // $('#regency').on('change', function() {
    //     let regencyId = $(this).val();
    //     let regencyName = $('#regency option:selected').data('name');
    //     if (regencyId) {
    //         $('#subdistrict').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
    //         $('#village').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Desa</option>');
    //         $.ajax({
    //             method: "GET",
    //             url: `https:www.emsifa.com/api-wilayah-indonesia/api/districts/${regencyId}.json`,
    //             dataType: "json",
    //             success: function(response) {
    //                 $('#subdistrict').html('<option value="" disabled selected hidden>Pilih Kecamatan</option>');
    //                 response.forEach(function(subdistrict) {
    //                     $('#subdistrict').append('<option value="' + subdistrict.id + '" data-name="' + subdistrict.name + '">' + subdistrict.name + '</option>');
    //                 });
    //             },
    //             error: function() {
    //                 alert("Gagal memuat data kecamatan!");
    //             }
    //         });
    //     }
    // });

    // // Enable village when subdistrict is selected
    // $('#subdistrict').on('change', function() {
    //     let subdistrictId = $(this).val();
    //     let subdistrictName = $('#subdistrict option:selected').data('name');
    //     if (subdistrictId) {
    //         $('#village').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
    //         $.ajax({
    //             method: "GET",
    //             url: `https:www.emsifa.com/api-wilayah-indonesia/api/villages/${subdistrictId}.json`,
    //             dataType: "json",
    //             success: function(response) {
    //                 $('#village').html('<option value="" disabled selected hidden>Pilih Desa/Kelurahan</option>');
    //                 response.forEach(function(village) {
    //                     $('#village').append('<option value="' + village.id + '" data-name="' + village.name + '">' + village.name + '</option>');
    //                 });
    //             },
    //             error: function() {
    //                 alert("Gagal memuat data desa!");
    //             }
    //         });
    //     }
    // });

    // // new
    // $.ajax({
    //     method: "GET",
    //     url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
    //     dataType: "json",
    //     success: function(response) {
    //         response.forEach(function(province) {
    //             $('#new_province').append('<option value="' + province.id + '" data-name="'
    //              + province.name + '">' + province.name + '</option>');
    //         });
    //     },
    //     error: function() {           
    //         alert("Gagal memuat data provinsi!");
    //     }
    // });

    // // Enable regency when province is selected
    // $('#new_province').on('change', function() {
    //     let provinceId = $(this).val();
    //     let provinceName = $('#new_province option:selected').data('name');
    //     if (provinceId) {
    //         $('#new_regency').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
    //         $('#new_subdistrict, #new_village').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Kecamatan</option>');
    //         $.ajax({
    //             method: "GET",
    //             url: `https:www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinceId}.json`,
    //             dataType: "json",
    //             success: function(response) {
    //                 $('#new_regency').html('<option value="" disabled selected hidden>Pilih Kabupaten</option>');
    //                 response.forEach(function(regency) {
    //                     $('#new_regency').append('<option value="' + regency.id + '" data-name="' + regency.name + '">' + regency.name + '</option>');
    //                 });
    //             },
    //             error: function() {
    //                 alert("Gagal memuat data kabupaten!");
    //             }
    //         });
    //     }
    // });

    // // Enable subdistrict when regency is selected
    // $('#new_regency').on('change', function() {
    //     let regencyId = $(this).val();
    //     let regencyName = $('#new_regency option:selected').data('name');
    //     if (regencyId) {
    //         $('#new_subdistrict').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
    //         $('#new_village').prop('disabled', true).html('<option value="" disabled selected hidden>Pilih Desa/Kelurahan</option>');
    //         $.ajax({
    //             method: "GET",
    //             url: `https:www.emsifa.com/api-wilayah-indonesia/api/districts/${regencyId}.json`,
    //             dataType: "json",
    //             success: function(response) {
    //                 $('#new_subdistrict').html('<option value="" disabled selected hidden>Pilih Kecamatan</option>');
    //                 response.forEach(function(subdistrict) {
    //                     $('#new_subdistrict').append('<option value="' + subdistrict.id + '" data-name="' + subdistrict.name + '">' + subdistrict.name + '</option>');
    //                 });
    //             },
    //             error: function() {
    //                 alert("Gagal memuat data kecamatan!");
    //             }
    //         });
    //     }
    // });

    // // Enable village when subdistrict is selected
    // $('#new_subdistrict').on('change', function() {
    //     let subdistrictId = $(this).val();
    //     let subdistrictName = $('#new_subdistrict option:selected').data('name');
    //     if (subdistrictId) {
    //         $('#new_village').prop('disabled', false).html('<option value="" disabled selected hidden>Loading...</option>');
    //         $.ajax({
    //             method: "GET",
    //             url: `https:www.emsifa.com/api-wilayah-indonesia/api/villages/${subdistrictId}.json`,
    //             dataType: "json",
    //             success: function(response) {
    //                 $('#new_village').html('<option value="" disabled selected hidden>Pilih Desa</option>');
    //                 response.forEach(function(village) {
    //                     $('#new_village').append('<option value="' + village.id + '" data-name="' + village.name + '">' + village.name + '</option>');
    //                 });
    //             },
    //             error: function() {
    //                 alert("Gagal memuat data desa!");
    //             }
    //         });
    //     }
    // });

    // When form is submitted, collect ID and Name of selected items
    // $('form').on('submit', function(e) {
    //     e.preventDefault();  // Prevent form from submitting immediately

    //     let oldprovince = JSON.stringify({
    //         id: $('#province').val(),
    //         name: $('#province option:selected').data('name')
    //     });
    //     let oldregency = JSON.stringify({
    //         id: $('#regency').val(),
    //         name: $('#regency option:selected').data('name')
    //     });
    //     let oldsubdistrict = JSON.stringify({
    //         id: $('#subdistrict').val(),
    //         name: $('#subdistrict option:selected').data('name')
    //     });
    //     let oldvillage = JSON.stringify({
    //         id: $('#village').val(),
    //         name: $('#village option:selected').data('name')
    //     });

    //     let newprovince = JSON.stringify({
    //         id: $('#new_province').val(),
    //         name: $('#new_province option:selected').data('name')
    //     });
    //     let newregency = JSON.stringify({
    //         id: $('#new_regency').val(),
    //         name: $('#new_regency option:selected').data('name')
    //     });
    //     let newsubdistrict = JSON.stringify({
    //         id: $('#new_subdistrict').val(),
    //         name: $('#new_subdistrict option:selected').data('name')
    //     });
    //     let newvillage = JSON.stringify({
    //         id: $('#new_village').val(),
    //         name: $('#new_village option:selected').data('name')
    //     });

    //     // Add the values to hidden inputs in the form (you can create hidden inputs for these fields)
    //     $('<input>').attr({
    //         type: 'hidden',
    //         name: 'province',
    //         value: province
    //     }).appendTo('form');
    //     $('<input>').attr({
    //         type: 'hidden',
    //         name: 'regency',
    //         value: regency
    //     }).appendTo('form');
    //     $('<input>').attr({
    //         type: 'hidden',
    //         name: 'subdistrict',
    //         value: subdistrict
    //     }).appendTo('form');
    //     $('<input>').attr({
    //         type: 'hidden',
    //         name: 'village',
    //         value: village
    //     }).appendTo('form');

    //     // Submit the form
    //     this.submit();
    // });
    //     });

        function toggleAddress(showNew) {
        document.getElementById('newAddressFields').style.display = showNew ? 'block' : 'none';
    }

    function toggleButton(show) {
        const continueButton = document.getElementById("continue-button");
        if (show) {
            continueButton.style.display = "block";
        } else {
            continueButton.style.display = "none";
        }
    }

    function toggleSelection(type) {
        const continueButton = document.getElementById("continue-button");
        const newAddressFields = document.getElementById("newAddressFields");

        if (type === 'existing') {
            continueButton.style.display = "block"; // Tampilkan tombol continue pertama
            newAddressFields.style.display = "none"; // Sembunyikan form alamat baru
        } else if (type === 'new') {
            continueButton.style.display = "none"; // Sembunyikan tombol continue pertama
            newAddressFields.style.display = "block"; // Tampilkan form alamat baru
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const continueButtons = document.querySelectorAll(".continue-btn");

        continueButtons.forEach(button => {
            button.addEventListener("click", function() {
                let nextStep = document.querySelector(this.getAttribute("data-next"));

                if (nextStep) {
                    // Tutup semua accordion terlebih dahulu
                    document.querySelectorAll(".accordion-collapse").forEach(section => {
                        section.classList.remove("show");
                    });

                    // Buka step berikutnya
                    nextStep.classList.add("show");
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
    const transferRadio = document.getElementById("transfer");
    const codRadio = document.getElementById("cod");
    const transferDetails = document.getElementById("transferDetails");

    transferRadio.addEventListener("change", function() {
        if (this.checked) {
            transferDetails.style.display = "block";
            transferRadio.parentNode.insertAdjacentElement("afterend", transferDetails);
        }
    });

    codRadio.addEventListener("change", function() {
        if (this.checked) {
            transferDetails.style.display = "none";
        }
    });
});
    </script>
@endpush