@extends('home.layouts.app')
@section('title', 'Contact - LSP KUKMI')
@section('content')
<h1>Halaman Contact</h1>
@endsection
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="fw-bold">KIRIM PESAN DISINI</h2>
            <form action="{{ url('/kontak/kirim') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="Telepon/WA" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" placeholder="Pesan" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger">KIRIM PESAN</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold">INFO KONTAK</h2>
            <p><strong>Alamat</strong><br>Jl. Pasar Besar Wetan, No. 38 Lt. 1, Surabaya</p>
            <p><strong>Email</strong><br>lsp.kukmi@gmail.com</p>
            <p><strong>Telepon / WA</strong><br>+62 812-3551-9327</p>
            <p><strong>Sosial Media</strong></p>
            <a href="#" class="btn btn-danger rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="btn btn-danger rounded-circle me-2"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.link/ozicfa" class="btn btn-danger rounded-circle"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    <div class="mb-4">
    <h2 class="fw-bold text-center" >Lokasi Kami</h2>
    <div class="d-flex justify-content-center"><iframe 
        src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1740579350659!5m2!1sid!2sid!6m8!1m7!1s6oJUKP3phl9FeT5jeBGyrQ!2m2!1d-7.247297442425895!2d112.7398983831254!3f346.8941634536266!4f10.483067259409808!5f0.6311951175922219"
        width="600" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe></div>
</div>
</div>

