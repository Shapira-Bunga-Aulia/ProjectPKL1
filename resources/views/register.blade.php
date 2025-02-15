{{-- @extends('templates.layout')
@section('content') --}}
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-oHB4kV3F3Quc6xXSRmDe8uLTZbswS+EXogEq4W5bdhoHvl3Z4K6j08DVCn5b6A1g" crossorigin="anonymous"></script> --}}
    <!-- import CDN CSS Bootstrap -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous"> --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(45deg, red, black);
        }

        .container {
            position: relative;
            width: 850px;
            height: 550px;
            background: #fff;
            border-radius: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .2);  
            margin: 20px;
            overflow: hidden;
        }

        .form-box {
            position: absolute;
            right: 0;
            width: 50%;
            height: 100%;
            background: #fff;
            display: flex;
            align-items: center;
            color: #333;
            text-align: center;
            padding: 40px;
            z-index: 1;
            transition: .6s ease-in-out 1.2s, visibility 0s 1s;
        }

        .container.active .form-box {
            right: 50%;
        }

        .form-box.register {
            visibility: hidden;

        }

        .container.active .form-box.register {
            visibility: visible;
        }

        form {
            width: 100%;
        }

        .container h1 {
            font-size: 36px;
            margin: -10px 0;
        }

        .input-box {
            position: relative;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            padding: 13px 50px 13px 20px;
            background: #eee;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 16px;
            color: #333;
            font-weight: 500;
        }

        .input-box input::placeholder {
            color: #888;
            font-weight: 400;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #888;
        }

        .forgot-link {
            margin: -15px 0 15px;
        }

        .forgot-link a {
            font-size: 14.5px;
            color: #333;
            text-decoration: none;
        }

        .btn {
            width: 100%;
            height: 48px;
            background:  #8b0000;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            font-weight: 600;
        }

        .container p {
            font-size: 14.5px;
            margin: 15px 0;
        }

        .social-icons {
            display: flex;
            justify-content: center;
        }

        .social-icons a {
            display: inline-flex;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 24px;
            color: #333;
            text-decoration: none;
            margin: 0 8px;
        }

        .toggle-box {
            position: absolute;
            width: 100%;
            height: 100%;
            /* background: palevioletred; */
        }

        .toggle-box::before {
            content: '';
            position: absolute;
            left: -250%;
            width: 300%;
            height: 100%;
            background:  linear-gradient(45deg, #ff0000, #8b0000, #000000);
            animation: neonBackground 7s ease infinite; 
            border-radius: 150px;
            z-index: 2;
            transition: 1.8s ease-in-out;
        }

        @keyframes neonBackground {
        0% {
            background-position: 0% 50%;
            /* color: #ff0000 */
            
        }
        50% {
            background-position: 100% 50%;
            /* color: #8b0000 */
        }
        100% {
            background-position: 0% 50%;
            /* color: #000000 */
        }
        /* animation {
            background: 2s ease infinite;
        } */
    }

        .container.active .toggle-box::before {
            left: 50%;
        }

        .toggle-panel {
            position: absolute;
            width: 50%;
            height: 100%;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 2;
            transition: .6s ease-in-out;
        }

        .toggle-panel.toggle-left {
            left: 0;
            transition-delay: 1.2s;
        }

        .container.active .toggle-panel.toggle-left {
            left: -50%;
            transition-delay: .6s;
        }

        .toggle-panel.toggle-right {
            right: -50%;
            transition-delay: .6s;
        }

        .container.active .toggle-panel.toggle-right {
            right: 0;
            transition-delay: 1.2s;
        }

        .toggle-panel p {
            margin-bottom: 20px;
        }

        .toggle-panel .btn {
            width: 160px;
            height: 46px;
            background: transparent;
            border: 2px solid #fff;
            box-shadow: none;
        }

        @media screen and (max-width: 650px) {
            .container {
                height: calc(100vh - 40px);
            }

            .form-box {
                bottom: 0;
                width: 100%;
                height: 70%;
            }

            .container.active .form-box {
                right: 0;
                bottom: 30%;
                border-radius: 20vw;
            }

            .toggle-box::before {
                left: 0;
                top: -270%;
                width: 100%;
                height: 300%;
            }

            .container.active .toggle-box::before {
                left: 0;
                top: 70%;
            }

            .toggle-panel {
                width: 100%;
                height: 30%;
            }

            .toggle-panel.toggle-left {
                top: 0;
            }

            .container.active .toggle-panel.toggle-left {
                left: 0;
                top: -30%;
            }

            .toggle-panel.toggle-right {
                right: 0;
                bottom: -30%;
            }

            .container.active .toggle-panel.toggle-right {
                bottom: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .form-box {
                padding: 20px;
            }

            .toggle-panel h1 {
                font-size: 30px;
            }
        }

        /* .btn-primary {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-color:  #23a1d1;
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
            padding: 4px 15px;
            display: inline-block;
        }

        .breadcrumb ul li:not(:last-child)::after {
            content: "";
            position: absolute;
            right: -10px; 
            top: 0;
            bottom: 0;
            width: 5px;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), #ddd);
            height: 100%;
            transform: skewX(-45deg);
            z-index: -2; 
        }

        .breadcrumb ul li a:hover {
            text-decoration: underline;
        } */

    </style>
</head>
<body>
    {{-- <div class="container mt-2">
    <nav class="breadcrumb navbar navbar-expand-lg" style="background-color: #f5f5f5; border-radius: 10px;">
        <ul>
            <li><a href="{{ route('home')}}"><span class="icon">🏠</span></a></li>
            <li><a href="{{ route('login')}}"style="font-size:15px">Account</a></li>
            <li><a href="{{ route('register')}}" style="font-size:15px">Register</a></li>
        </ul>
    </nav>
</div> --}}
    {{-- <div class="container mt-4">
    <div class="container"> --}}
        <div class="container" style="animation: neonBackground 7s ease infinite">
            <div class="form-box login">
            <form action="{{ route('loginAuth')}}" method="POST">
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

            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <i class='bx bxs-envelope' ></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="forgot-link">
                <a href="">Lupa password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <p>Login  Google</p>
            <div class="social-icons">
                <a href=""><i class='bx bxl-google' ></i></a>
            </div>

                {{-- <h1>Register Account</h1>
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
                </div> --}}
            </form>
            </div>
            
            <div class="form-box register">
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
        
                    <h1>Registration</h1>
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Name" required>
                        <i class='bx bxs-user' ></i>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <i class='bx bxs-envelope' ></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password">
                        <i class='bx bxs-lock-alt' ></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password">
                        <i class='bx bxs-lock'></i>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <p>or register with Google</p>
                    <div class="social-icons">
                        <a href=""><i class='bx bxl-google' ></i></a>
                    </div>
                </form>
            </div>

            <div class="toggle-box">
                <div class="toggle-panel toggle-left">
                    <h1>Hello, Welcome!</h1>
                    <p>Don't have an account?</p>
                    <button class="btn register-btn">Register</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Back!</h1>
                    <p>Already have an account?</p>
                    <button class="btn login-btn">Login</button>
                </div>
            </div>
        </div>
    {{-- </div> --}}
{{-- </div>   --}}
</body>
</html>
{{-- @endsection --}}
{{-- <div class="col-md-4">
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
</div> --}}
  {{-- @push('script') --}}
      <script>
        const container = document.querySelector('.container');
        const registerBtn = document.querySelector('.register-btn');
        const loginBtn = document.querySelector('.login-btn');

        registerBtn.addEventListener('click', () => {
            container.classList.add('active');
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove('active');
        });
      </script>
  {{-- @endpush --}}
