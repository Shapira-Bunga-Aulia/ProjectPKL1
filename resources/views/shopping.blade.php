@extends('templates.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- import CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
    <style>
        .btn-default {
        color: #777;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
        background-color: #e7e7e7;
        background-image: linear-gradient(to bottom, #eeeeee, #dddddd);
        background-repeat: repeat-x;
        border-color: #dddddd #dddddd #b3b3b3 #b7b7b7;
        }

        .btn {
            padding: 7.5px 12px;
            font-size: 12px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
        }

        .btn-success {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color: #5bb75b;
            background-image: linear-gradient(to bottom, #62c462, #51a351);
            background-repeat: repeat-x;
            border-color: #51a351 #51a351 #387038;
        }

        .custom-table {
            width: auto; /* Mengatur lebar tabel sesuai konten */
            margin: 0 auto; /* Membuat tabel di tengah halaman */
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
    </style>
    
</head>
<body>
    <div class="container mt-2">
        <nav class="breadcrumb navbar navbar-expand-lg" style="background-color: #f5f5f5; border-radius: 10px;">
            <ul>
                <li><a href="{{ route('home')}}"><span class="icon">🏠</span></a></li>
                <li><a href="{{ route('shopping')}}"style="font-size:15px">Shopping</a></li>
            </ul>
        </nav>
    </div>
<div class="container mt-4">
    <div class="container">
        <div class="row">
            <h1>Shopping Cart</h1>
            <div class="container mt-4">
                <!-- Nama User dan Nama Program -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama User</label>
                        <input name="name" id="name" class="form-control" placeholder="Masukkan nama kamu"></input>
                    </div>
                    <div class="col-md-6">
                        <label for="namaprogram" class="form-label">Nama Program</label>
                        <input type="text" name="namaprogram" id="namaprogram" class="form-control" placeholder="Masukkan nama program"></input>
                    </div>
                </div>
                <!-- Tanggal Sewa -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="tanggalsewa" class="form-label">Tanggal Sewa</label>
                        <input type="date" name="tanggalsewa" id="tanggalsewa" class="form-control" value="Pilih tanggal sewa"></input>
                    </div>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Model</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    
                </table>
                <div class="container mt-5">
                    <table class="table table-bordered d-flex justify-end justify-content-end">
                        <tbody>
                            <tr>
                                <td class="fw-bold">Sub-Total:</td>
                                <td class="text-end"></td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Total:</td>
                                <td class="text-end"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-default">Continue Shopping</button>
                <button type="button" class="btn btn-success">Order Via Whatsapp</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
