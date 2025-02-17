@extends('templates.layout')

@section('content')
<div class="container">
    <h3 class="mt-3">Stok Produk</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $inde x => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
