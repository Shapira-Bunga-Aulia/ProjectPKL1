@extends('templates.layout')

@section('content')
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <!-- Menampilkan Card Detail Produk dengan ukuran lebih besar dan panjang ke samping -->
            <div class="col-md-12 mb-3">
                <div class="card" style="border: 1px solid #ddd;">
                    <div class="d-flex">
                        <!-- Gambar di sebelah kiri dengan ukuran lebih besar -->
                        <div class="card-img-left" style="width: 50%; padding: 10px;">
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->nameproduct }}" class="img-fluid" style="height: 400px; width: auto; object-fit: cover;">
                        </div>

                        <!-- Teks di sebelah kanan -->
                        <div class="card-body" style="flex: 1; padding: 10px;">
                            <button type="button" class="btn btn-light text-secondary">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-light text-secondary">
                                <i class="fa-solid fa-code-compare"></i>
                            </button>
                            <h5 class="card-title" style="text-decoration: none; color: black;">
                                {{ $post->nameproduct }}
                            </h5>
                            <p class="card-text" style="margin-bottom: 5px;">{{ $post->namebrand }}</p>
                            <p class="card-text" style="margin-bottom: 5px;">{{ $post->code }}</p>
                            <p class="card-text" style="margin-bottom: 5px;">{{ $post->availability }}</p>
                            <p style="margin-bottom: 10px; font-size:25px;">Rp. {{ number_format($post->price, 0, ',', '.') }}/Day</p>

                            <div class="d-flex justify-content-start">
                                <button type="button" class="btn btn-light text-secondary mr-2">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-4">
            @csrf
            <h3>Write a review</h3>
            <div class="mb-3">
                <label for="name" class="form-label"><span style="color: red;">* </span>Your Name</label>
                <input type="text" class="form-control" name="name">
                <label for="comment" class="form-label"><span style="color: red;">* </span>Your Review</label>
                <textarea class="form-control" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Continue</button>
        </form>
    </div>
@endsection
