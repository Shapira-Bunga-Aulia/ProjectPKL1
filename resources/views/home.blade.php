@extends('templates.layout')

@section('content')
<br>
@if (session('product'))
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Product {{ session('product')->nameproduct }} created successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif


       

<!-- Create posting  & whatsapp icon -->
    <div style="position: fixed; right: 20px; bottom: 20px; display: flex; gap: 10px; z-index: 9999;">
        <a href="{{ route('posts.create') }}" id="create-icon" class="d-flex align-items-center" 
            style="font-size: 18px; background: linear-gradient(45deg, red, black); 
                    color: white; padding: 10px 15px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
                    cursor: pointer;">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>
        
        <a href="https://wa.me/xxxxxxxxxxx"  id="whatsapp-icon" class="d-flex align-items-center"  
            style="font-size: 18px; background: linear-gradient(45deg, red, black); 
                    color: white; padding: 10px 15px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
                    cursor: pointer;">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>
<!-- End create posting & whatsapp icon -->
 
    <style>
        #create-icon:hover {
            background-color: darkblue;
        }

        .card-title a {
            text-decoration: none;
            color: #8B0000;
        }

        .card-footer-buttons button {
            font-size: 14px;
            padding: 8px 12px;
            border: none;
            background-color: transparent;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .card-footer-buttons button:hover {
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .card-footer-buttons i {
            margin-right: 5px;
        }

        .carousel-inner img {
            height: 340px;
            object-fit: cover;
        }

        .footer-carousel-img {
            height: 15px; 
            object-fit: contain;
            width: 75%;
        }

        .carousel-inner {
            display: flex;
        }

        .carousel-item {
            flex: 1;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: none;
        }

        .col-2 {
            padding: 0;
        }
    </style>

    <!-- Jumbotron -->
     <br>
     <div class="container">
        
         <!-- alert -->
         @if(session('success'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                   Berhasil menambahkan ke perbandingan! 
                   <a href="{{ session('success') }}" class="alert-link">Lihat perbandingan</a>.
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           @endif
   
           @if(session('error'))
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ session('error') }}
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           @endif
     <!-- end alert -->

    <div id="jumbotronCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <!-- Slides -->
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="{{ asset('img/iklannew.jpeg') }}" class="d-block w-auto h-auto" alt="Iklan 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/iklannew2.jpeg') }}" class="d-block w-auto h-auto" alt="Iklan 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/iklannew3.jpeg') }}" class="d-block w-auto h-auto" alt="Iklan 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/iklannew4.png') }}" class="d-block w-auto h-auto" alt="Iklan 4">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/iklannew5.png') }}" class="d-block w-auto h-auto" alt="Iklan 5">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/iklannew6.jpeg') }}" class="d-block w-auto h-auto" alt="Iklan 6">
            </div>
        </div>
        <!-- Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#jumbotronCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#jumbotronCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
    <!-- End Jumbotron -->

    <!-- Card -->
    <div class="mb-3">
        <div class="container">
            <br>
            <br>
            <h4>Unggulan</h4>
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-md-3 mb-3">
                        <div class="card" style="height: 100%; border: 1px solid #8B0000; box-shadow: 7px 9px 14px rgba(153, 12, 12, 0.3);">
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->nameproduct }}" class="card-img-top">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">
                                    <a href="{{ route('posts.detail', $post->id) }}">{{ $post->nameproduct }}</a>
                                </h5>
                                <p class="card-text text-secondary" style="font-size: 13px;">{{ $post->description }}</p>
                                <p class="card-text text-secondary" style="font-size:14px;">Rp. {{ number_format($post->price, 0, ',', '.') }}/Hari</p>
                            </div>
                            <!-- Button footer card -->
                            <div class="card-footer d-flex justify-content-around align-items-center card-footer-buttons" style="border: 1px solid #8B0000">
                                <button type="button" class="btn btn-light text-secondary btn-add-to-cart" 
                                    data-name="{{ $post->nameproduct }} "
                                    data-price="{{ $post->price }}"
                                    data-image="{{ Storage::url($post->image) }}">
                                    <i class="fa-solid fa-cart-shopping"></i><b>+Keranjang</b>
                                </button>
 
                                <form action="{{ route('wishlist.store', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-light text-secondary">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </form>


                                <a href="{{ route('compare.add', ['id' => $post->id]) }}" class="btn btn-light text-secondary"> <i class="fa-solid fa-code-compare"></i></a>

                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light text-danger btn-delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div> 
                             <!--end button footer card  -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Card -->
@endsection
