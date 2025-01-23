@extends('templates.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- import CDN CSS Bootstrap -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
                .content {
            display: flex;
            justify-content: space-between;
        }
        /* Broken white background for cards */
        .card {
            background-color: #f1f1f1; /* Broken white */
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
                <li><a href="{{ route('login')}}"style="font-size:15px">Account</a></li>
                <li><a href="{{ route('register')}}" style="font-size:15px">Register</a></li>
            </ul>
        </nav>
    </div>
    <form action="{{ route('loginAuth')}}" method="POST">
    @csrf
    @if (session('failed'))
    <div class="alert alert-danger">
        {{ session('failed') }}
    </div>
@endif

    <div class="container mt-4">
    <div class="container">
        <div class="content">
            <!-- Left side with Login/Register cards -->
            <div class="row" style="width: 70%;">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Customer</h5>
                            <p class="card-text"><b>Register Account</b></p>
                            <p class="card-text">By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                            <a href="{{ route('register') }}" class="btn btn-primary">Continue</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Returning Customer</h5>
                            <p class="card-text"><b>I am a returning customer</b></p>
                            <label for="email">E-Mail Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail Address">
                            <br>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <label for="password"><span style="color:#23a1d1;">Forgotten Password</span></label>
                            <br><br>
                            {{-- <a href="{{ route('home')}}" class="btn btn-primary">Login</a> --}}
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side with List Group -->
            <div class="card" style="width: 25%;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Login</li>
                    <li class="list-group-item">Register</li>
                    <li class="list-group-item">Forgotten Password</li>
                    <li class="list-group-item">My Account</li>
                    <li class="list-group-item">Address Books</li>
                    <li class="list-group-item">Wish List</li>
                    <li class="list-group-item">Order History</li>
                    <li class="list-group-item">Downloads</li>
                    <li class="list-group-item">Reward Points</li>
                    <li class="list-group-item">Returns</li>
                    <li class="list-group-item">Transactions</li>
                    <li class="list-group-item">Newsletter</li>
                    <li class="list-group-item">Recurring payments</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>

@endsection
