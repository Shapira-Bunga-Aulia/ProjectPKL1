@extends('templates.layout')

@section('content')
<br>
<div class="container">
    <h3>Perbandingan Produk</h3>

    @php
        $compare = session('compare', []);
    @endphp

    @if(count($compare) > 0)
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Product</td>
                        @foreach ($compare as $product)
                            <td><h5><span style="color:#8B0000;">{{ $product['nameproduct'] ?? 'Nama Produk Tidak Tersedia'}}</span></h5></td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Image</td>
                        @foreach ($compare as $product)
                            <td>
                                <center>
                                    <img src="{{ isset($product['image']) ? Storage::url($product['image']) : asset('images/no-image.png') }}" width="100" style="border: 1px solid black; border-radius: 5px;">
                                </center>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Price</td>
                        @foreach ($compare as $product)
                            <td>Rp. {{ number_format($product['price'], 0, ',', '.') }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Brand</td>
                        @foreach ($compare as $product)
                            <td>{{ $product['namebrand'] }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Availability</td>
                        @foreach ($compare as $product)
                            <td>{{ $product['availability'] ?? 'Ketersediaan Tidak Diketahui'}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Summary</td>
                        @foreach ($compare as $product)
                            <td>{{ $product['description'] }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>Aksi</td>
                        @foreach ($compare as $product)
                            <td>
                                <center>
                                    <form action="{{ route('compare.remove', $product['id']) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-dark"> 
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-dark btn-add-to-cart"
                                     data-name="{{ $product['nameproduct'] }}"
                                     data-price="{{ $product['price'] }}"
                                     data-image="{{ isset($product['image']) ? Storage::url($product['image']) : asset('images/no-image.png') }}">
                                        <i class="fa-solid fa-plus"></i> Keranjang
                                    </button>
    
                                </center>
                            </td>
                        @endforeach
                    </tr>
                </thead>
            </table>
        </div>
    @else
        <p>Tidak ada produk untuk dibandingkan.</p>
    @endif

    <a href="{{ route('home') }}" class="btn btn-dark">Continue</a>
</div>
@endsection
