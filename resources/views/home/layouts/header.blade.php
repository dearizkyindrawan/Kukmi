<style>
    .menu-active{
        color : black !important;
        font-weight : bold;
    }
</style>  
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow align-items-center">
    <div class="container">
        <div class="d-flex align-items-center"> 
            <img src="/img/logo/logo-lspkukmi.png" alt="logo LSP KUKMI" class="me-2" height="50"> <h1 class="h4 mb-0">LSP KUKMI</h1>
        <a class="navbar-brand" href="#"></a></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is ('/') ? 'menu-active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is ('About') ? 'menu-active' : '' }}" href="/About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is ('Services') ? 'menu-active' : '' }}" href="/Services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is ('Contact') ? 'menu-active' : '' }}" href="/Contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is ('Albums') ? 'menu-active' : '' }}" href="/Albums">Albums</a>
          </li>
        </ul>
        
        
      </div>
    </div>
  </nav>
</header>


