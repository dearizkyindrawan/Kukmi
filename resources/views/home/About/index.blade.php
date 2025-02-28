@extends('home.layouts.app')
@section('title', 'About - LSP KUKMI')
@section('content')
<h1>Halaman About</h1>
@endsection
<div class="direksi-section">
  <h2 class="direksi-title">DIREKSI LSP KUKMI</h2>
  <div class="direksi-card">
    <img src="img/albums/direktur.png" alt="Drs. Imam Sutrisno, MM">
    <h4>Drs. Imam Sutrisno, MM</h4>
    <p>Direktur</p>
  </div>
</div>
<!-- About -->
<div class="about-section">
<h4 class="about-title text-center">Tentang Kami</h4>
    <div class="row align-items-center">
      <!-- Kolom untuk Logo -->
      <div class="col-md-4 text-center">
        <img src="img/logo/logo-lsp-hd.png" alt="Logo LSP KUKMI" class="about-logo img-fluid">
      </div>
      <!-- Kolom untuk Teks -->
      <div class="col-md-8">
        <p class="about-text">
          Lembaga Sertifikasi Profesi Kewirausahaan Kecil Menengah Indonesia (LSP KUKMI) adalah lembaga yang didirikan untuk memberikan sertifikasi kompetensi bagi pelaku usaha di sektor Koperasi dan Usaha Mikro Kecil Menengah (UMKM) di Indonesia dan terdaftar pada Badan Nasional Sertifikasi Profesi (BNSP) dengan nomor lisensi BNSP-LSP-2479-ID. LSP KUKMI bertujuan untuk meningkatkan kualitas dan daya saing sumber daya manusia di bidang koperasi dan kewirausahaan melalui proses sertifikasi yang independen dan profesional.
        </p>
      </div>
  </div>
</div>
<div class="container1 my-1">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Visi & Misi</h2>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm p-4 h-100">
        <h4 class="fw-semibold mb-3" style="font-family : Roboto; font-size: 30px; text-align: center">Visi</h4>
        <p>
          Menjadi lembaga sertifikasi profesi yang profesional, independen, dan akuntabel dalam mendukung peningkatan daya saing sumber daya manusia di sektor Koperasi dan Usaha Kecil Menengah (UKM).
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-sm p-4 h-100">
        <h4 class="fw-semibold mb-3" style="font-family : Roboto; font-size: 30px; text-align: Center">Misi</h4>
        <ul>
          <li>Menyelenggarakan sertifikasi kompetensi tenaga kerja bidang Koperasi dan UKM yang independen dan profesional.</li>
          <li>Menjamin mutu dengan menjaga proses sertifikasi sesuai dengan standar yang berlaku dan melakukan inovasi-inovasi.</li>
          <li>Menetapkan kompetensi sumber daya manusia melalui prosedur sertifikasi profesi kompetensi dan pengembangan skema sesuai kebutuhan masyarakat.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<style>
  .about-section{
    padding:70px;
  }
  .about-title{
    font-size : 30px;
    font-weight : bold;
    font-family : Roboto;
    color :rgb(255, 115, 0);
    margin-bottom : 20px;
  }
  .about-logo{
    width : 300px;
    height : auto;
  }
  .about-text {
   font-size: 18px;
   color: #333;
   font-family : Arial;
   text-align: justify;
  }
  .container1{
    padding : 70px;
    background-image: url('img/banner.jpg');
    background-repeat: no-repeat;
    background-size : cover;
  }
  h2 {
    color: rgb(255, 115, 0);
    text-align: center;
  }
  p {
    color: rgb(0, 0, 0);
    font-family : Arial;
    font-size : 16px;
    text-align: justify;
  }
  .card{
    border-radius : 12px;
  }
  .li{
    font-family : arial;
    font-size: 16px;
  }

  .direksi-section {
  background-image: url('img/banner.jpg'); /* Ganti dengan gambar background */
  background-size: cover; /* Menutupi seluruh area */
  background-position: center; /* Posisikan di tengah */
  background-repeat: no-repeat; /* Jangan ulang gambar */
  padding: 50px; /* Ruang di atas dan bawah */
}

.direksi-title {
  text-align: center;
  font-size: 28px;
  font-weight: bold;
  color: rgb(255, 115, 0); /* Warna putih agar kontras */
}

.direksi-card {
  background-color: rgba(255, 255, 255, 0.9); /* Warna putih dengan transparansi */
  padding: 15px;
  border-radius: 10px;
  text-align: center;
  width: 250px;
  margin: 0 auto; /* Tengah secara horizontal */
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

.direksi-card img {
  width: 100%;
  border-radius: 8px;
}

.direksi-card h4 {
  margin-top: 10px;
  font-size: 18px;
  color: #333;
}

.direksi-card p {
  font-size: 14px;
  color: #666;
}

</style>
