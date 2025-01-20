@extends('templates.layout')

@section('content')
    @if (session('product'))
        <div class="alert alert-success">
            Product {{ session('product')->nameproduct }} created successfully!
        </div>
    @endif

    <!-- Create posting icon -->
    <a href="{{ route('posts.create') }}" id="create-icon" class="d-flex align-items-center" 
       style="position: fixed; right: 20px; bottom: 20px; font-size: 18px; background-color: steelblue; 
              color: white; padding: 10px 15px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
              cursor: pointer;">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>

    <style>
        #create-icon:hover {
            background-color: darkblue;
        }

        .card-title a {
            text-decoration: none;
            color: black;
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
    </style>

    <div class="mb-3">
        <div class="container">
            <br>
            <br>
            <h4>Featured</h4>
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-md-3 mb-3">
                        <div class="card" style="height: 100%; border: 1px solid #ddd;">
                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->nameproduct }}" class="card-img-top">

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">
                                    <a href="{{ route('posts.detail', $post->id) }}">{{ $post->nameproduct }}</a>
                                </h5>
                                <p class="card-text">{{ $post->description }}</p>
                                <p>Rp. {{ number_format($post->price, 0, ',', '.') }}/Day</p>
                            </div>

                            <div class="card-footer d-flex justify-content-around align-items-center card-footer-buttons">
                                <button type="button" class="btn btn-light text-secondary">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                </button>
                                <button type="button" class="btn btn-light text-secondary">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button type="button" class="btn btn-light text-secondary">
                                    <i class="fa-solid fa-code-compare"></i>
                                </button>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light text-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
