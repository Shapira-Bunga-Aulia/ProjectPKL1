@extends('templates.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <!-- Import CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .breadcrumb {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 10px;
        }
        .breadcrumb ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .breadcrumb ul li a {
            text-decoration: none;
            color: #23a1d1;
            padding: 5px 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container mt-2">
        <nav class="breadcrumb">
            <ul class="d-flex">
                <li><a href="{{ route('home')}}">🏠</a></li>
                <li><a href="{{ route('shopping')}}">Shopping</a></li>
            </ul>
        </nav>
    </div>
    <div class="container mt-4">
        <h1 class="text-center">Shopping Cart</h1>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nama User</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama kamu">
            </div>
            <div class="col-md-6">
                <label for="namaprogram" class="form-label">Nama Program</label>
                <input type="text" name="namaprogram" id="namaprogram" class="form-control" placeholder="Masukkan nama program">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <label for="tanggalsewa" class="form-label">Tanggal Sewa</label>
                <input type="date" name="tanggalsewa" id="tanggalsewa" class="form-control">
            </div>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th>Product Name</th>
                        <th>Model</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Produk -->
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end">
            <table class="table table-bordered w-auto">
                <tbody>
                    <tr>
                        <td class="fw-bold">Sub-Total:</td>
                        <td class="text-end">Rp 0</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Total:</td>
                        <td class="text-end">Rp 0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-between mt-3">
            <button type="button" class="btn btn-secondary mb-2 mb-md-0">Continue Shopping</button>
            <button type="button" class="btn btn-success">Order Via Whatsapp</button>
        </div>
    </div>
</body>
</html>
@endsection
