@extends('templates.layout')

@section('content')
    <!-- Tampilkan pesan sukses atau error -->
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

    <!-- Form untuk create -->
     <br>
     <div>

         <div class="container">
             <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf <!-- CSRF token untuk keamanan -->
     
                 <div class="mb-3">
                     <label for="nameproduct">Name Product:</label>
                     <input type="text" name="nameproduct" class="form-control" placeholder="Masukkan Nama Produk..." required>
                 </div>
     
                 <div class="mb-3">
                     <label for="namebrand">Name Brand:</label>
                     <input type="text" name="namebrand" class="form-control" placeholder="Masukkan Nama Brand..." required>
                 </div>
     
                 <div class="mb-3">
                     <label for="code">Product Code:</label>
                     <input type="text" name="code" class="form-control" placeholder="Masukkan Kode Produk..." required>
                 </div>
     
                 <div class="mb-3">
                     <label for="availability">Availability:</label>
                     <input type="number" name="availability" class="form-control" placeholder="Jumlah Tersedia..." required>
                 </div>
     
                 <div class="mb-3">
                     <label for="description">Description:</label>
                     <textarea name="description" class="form-control" placeholder="Deskripsi Produk..." required></textarea>
                 </div>
     
                 <div class="mb-3">
                     <label for="price">Price:</label>
                     <input type="number" name="price" class="form-control" placeholder="Harga Produk..." required>
                 </div>
     
                 <div class="mb-3">
                     <label for="image" class="form-label">Image</label>
                     <input type="file" name="image" class="form-control" id="image">
                 </div>
     
                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>
         </div>
     </div>
@endsection
