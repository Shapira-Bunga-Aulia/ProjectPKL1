@extends('templates.layout')

@section('content')
<br>
<div class="container">
    <h3>Pengembalian</h3>

    <div class="container mt-4">
        <p style="font-size: 25px;">Informasi Pesanan</p>
        <hr>
        <form action="" method="POST" class="w-50">
            @csrf
            <div class="mb-3 d-flex align-items-center">
                <label for="name" class="w-25 text-secondary"><span style="color: red;">*</span> Nama: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama..." required>
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="email" class="w-25 text-secondary"><span style="color: red;">*</span> Email: </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email..." required>
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="telephone" class="w-25 text-secondary"><span style="color: red;">*</span> Telephone: </label>
                <input type="number" class="form-control" id="telephone" name="telephone" placeholder="No Telephone..." required>
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="date" class="w-25 text-secondary"><span style="color: red;">*</span> Tanggal Order: </label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            
            <p style="font-size: 25px;">Informasi Produk & Alasan untuk Pengembalian</p>
            <hr>
            <div class="mb-3 d-flex align-items-center">
                <label for="nameProduct" class="w-25 text-secondary"><span style="color: red;">*</span> Nama Produk: </label>
                <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Nama Produk..." required>
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label for="codeProduct" class="w-25 text-secondary"><span style="color: red;">*</span> Kode Produk: </label>
                <input type="text" class="form-control" id="codeProduct" name="codeProduct" placeholder="Kode Produk..." required>
            </div>
    
            <div class="mb-3">
                <label for="other" class="text-secondary"><span style="color: red;">*</span> Alasan Pengembalian: </label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="reason" id="reason1" value="Dead on Arrival" required>
                            <label for="reason1" class="form-check-label text-secondary">Dead On Arrival</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="reason" id="reason2" value="Faulty">
                            <label for="reason2" class="form-check-label text-secondary">Faulty, please supply details</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="reason" id="reason3" value="Order Error">
                            <label for="reason3" class="form-check-label text-secondary">Order Error</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="reason" id="reason4" value="Other">
                            <label for="reason4" class="form-check-label text-secondary">Other, please supply details</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="reason" id="reason5" value="Received Wrong Item">
                            <label for="reason5" class="form-check-label text-secondary">Received Wrong Item</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
            <label for="other" class="text-secondary"><span style="color: red;">*</span> Produk Terbuka: </label>
                <div class="d-flex">
                    <div class="form-check me-3">
                        <input type="radio" class="form-check-input" name="productIsOpened" id="productIsOpened1" value="Yes" required>
                        <label for="productIsOpened1" class="form-check-label text-secondary">Iya</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="productIsOpened" id="productIsOpened2" value="No" required checked>
                        <label for="productIsOpened2" class="form-check-label text-secondary">Tidak</label>
                    </div>
                </div>
            </div>
 
            <div class="mb-3">
                <label for="other" class="text-secondary"><span style="color: red;">*</span> Kesalahan atau Detail yang lain: </label>
                <textarea name="other" id="other" class="form-control" placeholder="Kesalahan atau Detail yang lain..." rows="3"></textarea>
            </div>
    
            <div class="mb-3">
                <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection