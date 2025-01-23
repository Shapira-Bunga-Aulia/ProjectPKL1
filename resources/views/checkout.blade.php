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
    </div>
    <div class="container mt-5">
        <h1>Checkout</h1>
    <div class="accordion" id="checkoutAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-toggle="collapse" data-target="#checkoutStep1" aria-expanded="true" aria-controls="checkoutStep1">
                Step 1: Checkout Options
            </button>
        </h2>
        <div id="checkoutStep1" class="accordion-collapse collapse show" data-parent="#checkoutAccordion">
            <div class="accordion-body">
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <div class="new-customer w-50 me-3">
                            <h4>New Customer</h4>
                            <form>
                                <p>Checkout Options:</p>
                                <input type="radio" id="register" name="register" value="register">
                                <label for="register">Register Account</label><br>
                                <input type="radio" id="guest" name="checkout" value="guest">
                                <label for="guest">Guest Checkout</label><br>
                                <br>
                            </form>
                            <p>
                                By creating an account you will be able to shop faster, be up to date on an order's
                                status, and keep track of the orders you have previously made.
                            </p>
                            <button type="button" class="btn btn-primary">Continue</button>
                        </div>
                        <div class="returning-customer w-50">
                            <h4>Returning Customer</h4>
                            <p>I am a returning customer</p>
                            <form>
                                <label for="email">E-Mail</label><br>
                                <input type="email" id="email" name="email" class="form-control mb-2" placeholder="E-Mail"><br>
                                <label for="password">Password</label><br>
                                <input type="password" id="password" name="password" class="form-control mb-2" placeholder="Password"><br>
                                <a href="#" class="text-primary">Forgotten Password</a><br>
                                <button type="button" class="btn btn-primary mt-2">Login</button>
                            </form>
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
                Step 2: Account & Billing Details
            </button>
        </h2>
        <div id="checkoutStep2" class="accordion-collapse collapse" data-parent="#checkoutAccordion">
            <div class="accordion-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Your Personal Details -->
                            <div class="col-md-6">
                                <legend>Your Personal Details</legend>
                                <hr>
                                <div class="row mb-3">
                                    <label for="firstname"><span style="color: red">* </span>First Name</label>
                                    <div class="col-12">
                                        <input name="firstname" id="firstname" class="form-control" placeholder="First Name"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lastname"><span style="color: red">* </span>Last Name</label>
                                    <div class="col-12">
                                        <input name="lastname" id="lastname" class="form-control" placeholder="Last Name"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email"><span style="color: red">* </span>E-Mail</label>
                                    <div class="col-12">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="telephone"><span style="color: red">* </span>Telephone</label>
                                    <div class="col-12">
                                        <input name="telephone" id="telephone" class="form-control" placeholder="Telephone"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fax">Fax</label>
                                    <div class="col-12">
                                        <input name="fax" id="fax" class="form-control" placeholder="Fax"></input>
                                    </div>
                                </div>
                                <!-- Your Password -->
                                <legend>Your Password</legend>
                                <hr>
                                <div class="row mb-3">
                                    <label for="password"><span style="color: red">* </span>Password</label>
                                    <div class="col-md-12">
                                        <input name="password" id="password" class="form-control" placeholder="Password"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="passwordconfirm"><span style="color: red">* </span>Password Confirm</label>
                                    <div class="col-md-12">
                                        <input type="password" name="passwordconfirm" id="passwordconfirm" class="form-control" placeholder="Password Confirm"></input>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Your Address -->
                            <div class="col-md-6">
                                <legend>Your Address</legend>
                                <hr>
                                <div class="row mb-3">
                                    <label for="company">Company</label>
                                    <div class="col-12">
                                        <input name="company" id="company" class="form-control" placeholder="Company"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address1"><span style="color: red">* </span>Address 1</label>
                                    <div class="col-12">
                                        <input name="address1" id="address1" class="form-control" placeholder="Address 1"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address2">Address 2</label>
                                    <div class="col-12">
                                        <input name="address2" id="address2" class="form-control" placeholder="Address 2"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="city"><span style="color: red">* </span>City</label>
                                    <div class="col-12">
                                        <input name="city" id="city" class="form-control" placeholder="City"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="postcode">Post Code</label>
                                    <div class="col-12">
                                        <input name="postcode" id="postcode" class="form-control" placeholder="Post Code"></input>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="country"><span style="color: red">* </span>Country</label>
                                    <div class="col-12">
                                        <select name="country" id="country" class="form-control">
                                            <option value="">--- Please Select---</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="region"><span style="color: red">* </span>Region / State</label>
                                    <div class="col-12">
                                        <select name="region" id="region" class="form-control">
                                            <option value="">--- Please Select---</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="/action_page.php">
                            <input type="checkbox" id="cbox1" name="cbox1" value="">
                            <label for="cbox1"> I wish to subscribe to the BSM Multimedia newsletter.</label><br>
                            <input type="checkbox" id="cbox2" name="cbox2" value="">
                            <label for="cbox2"> My delivery and billing addresses are the same.</label><br>
                            
                            <div class="row mb-3">
                                <div class="col-md-12 d-flex justify-content-end align-items-center">
                                    <input type="checkbox" id="agreement" name="agreement" class="me-2">
                                    <label for="agreement" class="me-3"> I have read and agree to the <span style="color: #23a1d1;">Support Project</span></label>
                                    <button type="button" class="btn btn-primary">Continue</button>
                                </div>
                            </div>
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
                Step 3: Delivery Details
            </button>
        </h2>
        <div id="checkoutStep3" class="accordion-collapse collapse" data-parent="#checkoutAccordion">
            <div class="accordion-body">
                <form>
                    <input type="radio" id="register" name="checkout" value="register">
                    <label for="register">I want to use an existing address</label><br>
                    <select name="address" id="address">
                        <option value="Select Option">select option</option>
                    </select>
                    <br>
                    <input type="radio" id="addres1" name="addres1" value="">
                    <label for="newaddress">I want to use a new address</label><br>
                    <div class="container mt-4">
                        <div class="row mb-3">
                            <label for="firstname"><span style="color: red">* </span>First Name</label>
                            <div class="col-md-8">
                                <input name="firstname" id="firstname" class="form-control" placeholder="First Name"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lastname"><span style="color: red">* </span>Last Name</label>
                            <div class="col-12">
                                <input name="lastname" id="lastname" class="form-control" placeholder="Last Name"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="company">Company</label>
                            <div class="col-12">
                                <input name="company" id="company" class="form-control" placeholder="Company"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address1"><span style="color: red">* </span>Address 1</label>
                            <div class="col-12">
                                <input name="address1" id="address1" class="form-control" placeholder="Address 1"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address2">Address 2</label>
                            <div class="col-12">
                                <input name="address2" id="address2" class="form-control" placeholder="Address 2"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="city"><span style="color: red">* </span>City</label>
                            <div class="col-12">
                                <input name="city" id="city" class="form-control" placeholder="City"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="postcode">Post Code</label>
                            <div class="col-12">
                                <input name="postcode" id="postcode" class="form-control" placeholder="Post Code"></input>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="country"><span style="color: red">* </span>Country</label>
                            <div class="col-12">
                                <select name="country" id="country" class="form-control">
                                    <option value="">--- Please Select---</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="region"><span style="color: red">* </span>Region / State</label>
                            <div class="col-12">
                                <select name="region" id="region" class="form-control">
                                    <option value="">--- Please Select---</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- accordion 4 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#checkoutStep4" aria-expanded="false" aria-controls="checkoutStep4">
                Step 4: Delivery Method
            </button>
        </h2>
        <div id="checkoutStep4" class="accordion-collapse collapse show" data-parent="#checkoutAccordion">
        <div class="card">
            <div class="card-body">
                <p>Please select the preferred shipping method to use on this order.</p>
                <p><b>Flat Rate</b></p>
                <input type="radio" id="flat" name="flat" value="">
                <label for="flat"> Flat Shipping Rate - Rp. 5/Day</label><br>
                <br>
                <label for="coment"><b>Add Comments About Your Order</b></label> <br>
                <textarea name="coment" id="coment" cols="15" rows="8" class="form-control"></textarea> <br>
                <button type="button" class="btn btn-primary">Continue</button>
            </div>
        </div>
    </div>

    {{-- accordion 5 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#checkoutStep5" aria-expanded="false" aria-controls="checkoutStep5">
                Step 5: Delivery Method
            </button>
        </h2>
        <div id="checkoutStep5" class="accordion-collapse collapse show" data-parent="#checkoutAccordion">
        <div class="card">
            <div class="card-body">
                <p>Please select the preferred payment method to use on this order.</p>
                <input type="radio" id="payment" name="payment" value="">
                <label for="payment"> Cash On Delivery</label><br>
                <br>
                <label for="coment"><b>Add Comments About Your Order</b></label> <br>
                <textarea name="coment" id="coment" cols="15" rows="8" class="form-control"></textarea> <br>
                <div class="row mb-3">
                    <div class="col-md-12 d-flex justify-content-end align-items-center">
                        <input type="checkbox" id="agreement" name="agreement" class="me-2">
                        <label for="agreement" class="me-3"> I have read and agree to the <span style="color: #23a1d1;">Support Project</span></label>
                        <button type="button" class="btn btn-primary">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- accordion 6 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#checkoutStep6" aria-expanded="false" aria-controls="checkoutStep6">
                Step 6: Confirm Order
            </button>
        </h2>
        <div id="checkoutStep6" class="accordion-collapse collapse show" data-parent="#checkoutAccordion">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Model</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Price</th>
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
                            <button type="button" class="btn btn-primary">Confirm Order</button>
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