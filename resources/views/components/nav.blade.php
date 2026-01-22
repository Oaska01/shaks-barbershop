<link rel="stylesheet" href="assets/css/style.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('index') }}">Shaks</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Haircuts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>

    <div class="d-flex align-items-center justify-content-between">
        @guest
            <a class="btn btn-primary me-2" href="{{ route('registration.view') }}">Signup</a>
            <a class="btn btn-primary me-2" href="{{ route('login.view') }}">Login</a>
        @endguest

        @auth
             <a class="btn btn-primary me-2" href="{{ route('logout') }}">Logout</a>
        @endauth
  </div>
</nav>
