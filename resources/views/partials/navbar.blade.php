  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
      <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">
              <img src="{{ asset('img/logo_light_cropped.png') }}" alt="LOSLC" class="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} "
                          href="{{ route('home') }}">Accueil</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('registration') ? 'active' : '' }} "
                          href="{{ route('registration') }}">Inscription</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
