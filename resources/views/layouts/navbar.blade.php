<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
  <a class="navbar-brand" href="{{url('/')}}">Vacunación COVID 2021</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="{{url('/vacunas')}}" class="nav-link {{ Request::is('vacunas*') && !Request::is('pacientes/buscador')? ' active' : ''}}">Vacunas</a>
      </li>
      <li class="nav-item">
        <a href="{{url('/pacientes/buscador')}}" class="nav-link {{ Request::is('pacientes/buscador')? ' active' : ''}}">Buscador</a>
      </li>
    </ul>
    
  </div>
</nav>





