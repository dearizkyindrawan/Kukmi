@extends('home.layouts.app')
@section('title', 'LSP KUKMI')
@section('content')
<h1>LSP KUKMI</h1>
@endsection
<head><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
      body, html {
        height: 100%;
        margin: 10;
        background-size: cover;
        background-position: center;
        animation: changeBackground 100s infinite alternate;
      }

      .cover-container {
        font-family: Arial;
        font-size: 30;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
      }

      @keyframes changeBackground {
        0% { background-image: url('/img/cover/lsp-kukmi-place.jpg'); }
        33% { background-image: url('/img/cover/lsp-kukmi-1.jpg'); }
        66% { background-image: url('/img/cover/lsp-kukmi-2.jpg'); }
        100% { background-image: url('/img/cover/lsp-kukmi-3.jpg'); }
      }

      .btn-custom {
        background-color: #ffc107;
        color: black;
        font-weight: bold;
      }

      .btn-custom:hover {
        background-color: #e0a800;
      }
      h1, h2, h3, p {
        font-family: 'Poppins', sans-serif;
      }
      .h1{
        font-weight:900;
        font-size : 3.5rem;
      }
      .p{
        font-weight:400;
      }
    </style>
  </head>
  <body>
    <div class="cover-container">
      <main>
        <h1>Selamat Datang di LSP KUKMI</h1>
        <p class="lead">Meningkatkan kualitas dan daya saing SDM di bidang koperasi dan kewirausahaan melalui sertifikasi kompetensi.</p>
        <p class="lead">
          <a href="About" class="btn btn-lg btn-custom">Tentang Kami</a>
        </p>
      </main>
    </div>
  </body>