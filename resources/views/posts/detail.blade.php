@extends('templates.layout')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <!-- Menampilkan Card Detail Produk dengan ukuran lebih besar dan panjang ke samping -->
        <div class="col-12 col-md-12 col-lg-12 mb-3">
            <div class="card" style="border: 1px solid #ddd;">
                <div class="d-flex flex-column flex-md-row">
                    <!-- Gambar di sebelah kiri dengan ukuran lebih besar -->
                    <div class="card-img-left" style="width: 100%; padding: 10px; max-width: 500px;">
                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->nameproduct }}" class="img-fluid" style="height: 400px; object-fit: cover;">
                    </div>

                    <!-- Teks di sebelah kanan -->
                    <div class="card-body" style="flex: 1; padding: 10px;">
                        
                        <!-- wishlist -->
                                <form action="{{ route('wishlist.store', $post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-light text-secondary">
                                        <i class="fa-solid fa-heart"></i>
                                    </button>
                                </form>
                        <!-- END -->

                        <!-- COMPARE -->
                        <a href="{{ route('compare.add', ['id' => $post->id]) }}" class="btn btn-light text-secondary"> <i class="fa-solid fa-code-compare"></i></a>
                        <!-- END -->

                        <h3 class="card-title" style="text-decoration: none; color: black;">
                            {{ $post->nameproduct }}
                        </h3>
                        <p class="card-text text-secondary" style="margin-bottom: 5px; font-size: 13px;">Brand: {{ $post->namebrand }}</p>
                        <p class="card-text text-secondary" style="margin-bottom: 5px; font-size: 13px;">Kode Produk: {{ $post->code }}</p>
                        <p class="card-text text-secondary" style="margin-bottom: 5px; font-size: 13px;">Tersedia: {{ $post->availability }}</p>
                        <br>
                        <p style="margin-bottom: 10px; font-size:25px;">Rp. {{ number_format($post->price, 0, ',', '.') }}/Hari</p>
                        <p class="card-text text-secondary" style="margin-bottom: 5px; font-size: 14px;">Qty</p>
                        <input type="text" class="form-control">
                        <br>
                        <div class="d-flex justify-content-start">
                            <button type="button" class="btn btn-light text-secondary btn-add-to-cart" 
                                data-name="{{ $post->nameproduct }} "
                                data-price="Rp. {{ number_format($post->price, 0, ',', '.') }}/Hari"
                                data-image="{{ Storage::url($post->image) }}">
                                <i class="fa-solid fa-cart-shopping"></i> <b>Tambah ke Keranjang</b>
                            </button>
                        </div>
                        <br>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs untuk Detail dan Comments -->
    <ul class="nav nav-tabs" id="productTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detail" type="button" role="tab" aria-controls="detail" aria-selected="true">Deskripsi</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false">Review ({{ $comments->count() }})</button>
        </li>
    </ul>

    <div class="tab-content" id="productTabsContent">
        <!-- Tab Detail -->
        <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
            <div class="mt-3" style="word-wrap: break-word; overflow-wrap: break-word;">
                <h6>Sorotan Produk</h6>
                {!! nl2br(e($post->detail)) !!}
            </div>
        </div>

        <!-- Tab Comments -->
        <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
            <div class="mt-3">
            @if($comments->isEmpty())
                <p>No comments yet. Be the first to comment!</p>
            @else
                <ul class="list-group">
                    @foreach($comments as $comment)
                        <li class="list-group-item">
                            <strong>{{ $comment->name }}</strong>
                            <p>{{ $comment->comment }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
            </div>

            <!-- Form untuk menambahkan comment -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach 
                    </ul>
                </div>
            @endif

            <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-4">
                @csrf
                <h5>Tulis Review</h5>
                <div class="mb-3">
                    <label for="name" class="form-label text-secondary" style="font-size: 14px;"><span style="color: red;">* </span>Nama:</label>
                    <input type="text" class="form-control" name="name" required>
                    <br>
                    <label for="comment" class="form-label text-secondary" style="font-size: 14px;"><span style="color: red;">* </span>Review:</label>
                    <textarea class="form-control" name="comment" rows="3" required></textarea>
                    <label for="note" class="text-secondary" style="font-size: 13px;" required><span style="color:red;">Note:</span>HTML is not translated!</label>
                    <br>
                    <br>
                    <label for="rating" class="form-label text-secondary" style="font-size: 14px;"><span style="color: red;">*</span>Rating  Bad
                    <input type="radio" name="rating" value="1">
                    <input type="radio" name="rating" value="2">
                    <input type="radio" name="rating" value="3">
                    <input type="radio" name="rating" value="4">
                    <input type="radio" name="rating" value="5">
                    Good
                    </label>
                    <br>
                    <label for="enterCode" class="form-label text-secondary" style="font-size: 14px;"><span style="color:red;">*</span>Masukkan kode pada kotak di bawah ini</label>
                    <input type="text" class="form-control" name="enterCode" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
