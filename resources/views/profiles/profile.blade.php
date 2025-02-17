@extends('templates.layout')

@section('content')
<br>
<div class="container">
    <h3>Profil Pengguna</h3>

    <div class="card">
        <div class="card-header">
            <b>Informasi Profil</b>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong>#</p>
            <p><strong>Email:</strong>#</p>
            <p><strong>Password:</strong>#</p>
            <p><strong>No Handphone:</strong>#</p>
            <p><strong>Terdaftar sejak:</strong>#</p>

            <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
            <a href="#" class="btn btn-danger">Edit Profil</a>
        </div>
    </div>
</div>
@endsection
