@extends('templates.layout')

@section('content')
<br>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg" style="width: 100%; max-width: 600px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Tambah Produk</h3>
                <hr>
                
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <div class="mb-3">
                        <label for="nameproduct" class="form-label"><span style="color: red;">*</span> Nama Produk:</label>
                        <input type="text" name="nameproduct" class="form-control" placeholder="Masukkan Nama Produk..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="namebrand" class="form-label"><span style="color: red;">*</span> Nama Brand:</label>
                        <input type="text" name="namebrand" class="form-control" placeholder="Masukkan Nama Brand..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="code" class="form-label"><span style="color: red;">*</span> Kode Produk:</label>
                        <input type="text" name="code" class="form-control" placeholder="Masukkan Kode Produk..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="availability" class="form-label"><span style="color: red;">*</span> Tersedia:</label>
                        <input type="number" name="availability" class="form-control" placeholder="Jumlah Tersedia..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label"><span style="color: red;">*</span> Deskripsi:</label>
                        <textarea name="description" class="form-control" placeholder="Deskripsi Produk..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="detail" class="form-label"><span style="color: red;">*</span> Detail:</label>
                        <textarea name="detail" class="form-control" placeholder="Detail Produk..." required></textarea>
                    </div>
    
                    <div class="mb-3">
                        <label for="price" class="form-label"><span style="color: red;">*</span> Harga:</label>
                        <input type="number" name="price" class="form-control" placeholder="Harga Produk..." required>
                    </div>
    
                    <div class="mb-3">
                        <label for="image" class="form-label"><span style="color: red;">*</span> Gambar:</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
    
                    <button type="submit" class="btn btn-dark w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
