@extends('home.layouts.app')
@section('title', 'Services - LSP KUKMI')
@section('content')
<h1>Halaman Services</h1>
@endsection
<section class="layanan-section">
    <h2>Layanan</h2>
    <div class="layanan-container">
        <div class="layanan-item">
            <img src="https://cdn-icons-png.flaticon.com/512/1903/1903162.png" alt="Sertifikasi">
            <h3>Sertifikasi Kompetensi</h3>
            <p>Layanan sertifikasi profesi untuk sertifikasi kualifikasi IV bidang Kewirausahaan Industri.</p>
        </div>
        <div class="layanan-item">
            <img src="https://cdn-icons-png.flaticon.com/512/1903/1903162.png" alt="Pengembangan SDM">
            <h3>Pengembangan Sumber Daya Manusia</h3>
            <p>Membantu meningkatkan kompetensi dan daya saing pelaku usaha.</p>
        </div>
        <div class="layanan-item">
            <img src="https://cdn-icons-png.flaticon.com/512/1903/1903162.png" alt="Peningkatan Mutu">
            <h3>Peningkatan Mutu dan Standar</h3>
            <p>Mengembangkan skema sertifikasi yang relevan dengan kebutuhan pasar.</p>
        </div>
    </div>
</section>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .layanan-section {
            background-color: #5A3B24;
            color: white;
            text-align: center;
            padding: 100px;
        }
        .layanan-section h2 {
            font-size: 28px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .layanan-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }
        .layanan-item {
            background: white;
            color: #5A3B24;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .layanan-item img {
            width: 60px;
            height: 60px;
        }
        .layanan-item h3 {
            font-size: 18px;
            margin: 15px 0;
        }
        .layanan-item p {
            font-size: 14px;
        }
    </style>