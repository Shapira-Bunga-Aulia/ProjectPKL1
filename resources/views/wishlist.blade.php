@extends('templates.layout')

@section('content')
<br>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container">       
    <h3>Daftar Keinginan Saya</h3>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">          
            <thead class="table-dark">
                <tr>
                    <th style="border-bottom: 2px solid white;">Gambar</th>
                    <th style="border-bottom: 2px solid white;">Nama Produk</th>
                    <th style="border-bottom: 2px solid white;">Stok</th>
                    <th style="border-bottom: 2px solid white;">Harga Unit</th>
                    <th style="border-bottom: 2px solid white;">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($wishlists) && $wishlists->count() > 0)
                    @foreach ($wishlists as $wishlist)
                        <tr>
                            <td>
                                <img src="{{ asset('img/posts/' . $wishlist->post->image) }}" alt="Produk" class="img-fluid" width="50">
                            </td>
                            <td>{{ $wishlist->post->nameproduct }}</td>
                            <td>{{ $wishlist->post->availability }}</td>
                            <td>Rp {{ number_format($wishlist->post->price, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('posts.destroy', $wishlist->post->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">Wishlist kosong</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
