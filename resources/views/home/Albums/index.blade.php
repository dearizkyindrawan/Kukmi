@extends('home.layouts.app')
@section('title', 'Albums - LSP KUKMI')
@section('content')
<h1>Halaman Albums</h1>
@endsection
<div class="album py-5 bg-light">
    <div class="container">
      <H1 class="text-center" style="font-family: Poppins, serif;
  font-weight: 800;
  font-style: normal; " >Foto Kegiatan</H1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (1).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            <div class="col">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (2).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            </div>
            <div class="col">
                <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (3).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
        </div>
        </div>
        <!-- Baris Kedua -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (4).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (5).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (6).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
        </div>
        <!-- Baris Ketiga -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (7).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (8).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (9).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
        </div>
        <!-- Baris Keempat -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (10).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (11).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="/img/albums/foto (12).jpeg" class="card-img-top" alt="Foto Album">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  .card-img-top {
    object-fit: cover; /* Bisa diganti dengan cover jika lebih sesuai */
    height: 225px;
    width: 100%;
    display: block;
    background-color: #f8f9fa; /* Opsional, untuk background kosong */
}
</style>