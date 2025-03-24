<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/inicio') }}">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/vista1') }}">Vista 1</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/vista2') }}">Vista 2</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/vista3') }}">Vista 3</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/vista4') }}">Vista 4</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/vista5') }}">Vista 5</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/home') }}">Home</a>
        </li>

       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Más opciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/inicio') }}">Menú Principal</a></li>
            <li><a class="dropdown-item" href="#">Otra opción</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Más contenido</a></li>
          </ul>
        </li>
      </ul>

     
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
