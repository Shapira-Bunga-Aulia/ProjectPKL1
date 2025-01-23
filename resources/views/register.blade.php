@extends('templates.layout')
@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-oHB4kV3F3Quc6xXSRmDe8uLTZbswS+EXogEq4W5bdhoHvl3Z4K6j08DVCn5b6A1g" crossorigin="anonymous"></script> --}}
    <!-- import CDN CSS Bootstrap -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous"> --}}
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
    <div class="container mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <form action="{{ route('registrasi')}}" method="POST">
            @csrf
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <h1>Register Account</h1>
                <p>If you already have an account with us, please login at the <span style="color: #23a1d1;">login page</span>.</p>
                <br>
                <h4>Your Personal Details</h4>
                <div class="container mt-4">
                    <div class="row mb-3">
                        <label for="firstname" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>First Name</label>
                        <div class="col-md-8">
                            <input name="firstname" id="firstname" class="form-control" placeholder="First Name"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>Last Name</label>
                        <div class="col-md-8">
                            <input name="lastname" id="lastname" class="form-control" placeholder="Last Name"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>E-Mail</label>
                        <div class="col-md-8">
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telephone" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>Telephone</label>
                        <div class="col-md-8">
                            <input name="telephone" id="telephone" class="form-control" placeholder="Telephone"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fax" class="col-md-4 col-form-label text-end">Fax</label>
                        <div class="col-md-8">
                            <input name="fax" id="fax" class="form-control" placeholder="Fax"></input>
                        </div>
                    </div>

                    <h4>Your Address</h4>
                    <div class="row mb-3">
                        <label for="company" class="col-md-4 col-form-label text-end">Company</label>
                        <div class="col-md-8">
                            <input name="company" id="company" class="form-control" placeholder="Company"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address1" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>Address 1</label>
                        <div class="col-md-8">
                            <input name="address1" id="address1" class="form-control" placeholder="Address 1"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address2" class="col-md-4 col-form-label text-end">Address 2</label>
                        <div class="col-md-8">
                            <input name="address2" id="address2" class="form-control" placeholder="Address 2"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="city" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>City</label>
                        <div class="col-md-8">
                            <input name="city" id="city" class="form-control" placeholder="City"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="postcode" class="col-md-4 col-form-label text-end">Post Code</label>
                        <div class="col-md-8">
                            <input name="postcode" id="postcode" class="form-control" placeholder="Post Code"></input>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="country" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>Country</label>
                        <div class="col-md-8">
                            <select name="country" id="country" class="form-control">
                                <option value="">--- Please Select---</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="province" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>Region / State</label>
                        <div class="col-md-8">
                            <select name="province" id="province" class="form-control">
                                <option value="">--- Please Select---</option>
                            </select>
                        </div>
                    </div>

                    <h4>Your Password</h4>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-end"><span style="color: red">* </span>Password Confirm</label>
                        <div class="col-md-8">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirm">
                        </div>
                    </div>
                    

                    <h4>Newsletter</h4>
                    <form action="/action_page.php">
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-end">Subscribe</label>
                            <div class="col-md-8">
                                <input type="radio" id="yes" name="newsletter" value="yes">
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="newsletter" value="no">
                                <label for="no">No</label> 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8 offset-md-4">
                                <input type="checkbox" id="agreement" name="agreement">
                                <label for="agreement"> I have read and agree to the <span style="color: #23a1d1;">Support Project</span></label>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary" >Continue</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
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
</div>  
</body>
</html>
@endsection

    @push('script')
    <script>

// $(document).ready(function() {
//             if ($("#toast").length) {
//                 var toast = new bootstrap.Toast(document.getElementById('toast'));
//                 toast.show();
//             }

//             $.ajax({
//         method: "GET",
//         url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
//         dataType: "json",
//         success: function(response) {
//             response.forEach(function(province) {
//                 $('#province').append('<option value="' + province.id + '" data-name="' + province.name + '">' + province.name + '</option>');
//             });
//         },
//         error: function() {
//             alert("Gagal memuat data provinsi!");
//         }
//     });
// });


        
    $(document).ready(function() {
        
        const countriesApi = "https://restcountries.com/v3.1/all";
        const regionsApi = "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json";

        $.ajax({
            url: countriesApi,
            method: "GET",
            dataType: "json",
            success: function(countries) {
                countries.forEach(country => {
                    $('#country').append(
                        `<option value="${country.cca2}">${country.name.common}</option>`
                    );
                });
            },
            error: function(xhr, status, error) {
                console.error("Error fetching countries:", error);
                alert("Gagal memuat data negara!");
            }
        });

        $('#country').on('change', function() {
            const countryId = $(this).val();

            if (countryId) {
                $('#province').empty().append('<option value="">--- Please Select---</option>');

                $.ajax({
                method: "GET",
                url: regionsApi,
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
            } else {
                $('#province').empty().append('<option value="">--- Please Select---</option>');
            }
        });
    });

        </script>
    @endpush
