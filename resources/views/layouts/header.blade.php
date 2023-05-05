<nav class="navbar navbar-expand-xl navbar-light bg-light  mb-3 position-relaive  py-4 "  aria-label="Sixth navbar example">

  <div class="container-fluid ">
    <a class="navbar-brand ps-2 w-75" href="#">
      <img src="{{ asset('images/logo.png') }}" alt="" class="w-50">  
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse text-center my-2" id="navbarsExample06" style="">
      <ul class="navbar-nav me-auto mb-2 mb-xl-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('menu') }}">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactanos</a>
        </li>
    </div>
  </div>
</nav>
