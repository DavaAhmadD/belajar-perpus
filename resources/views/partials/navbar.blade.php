<nav class="navbar navbar-expand-lg navbar-color">
    <div class="container-fluid">
      <a class="fw-semibold navbar-brand" href="{{ route('dashboard') }}">Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
          <a class="nav-link {{ Request::is('daftarbuku') ? 'active' : '' }}" href="{{ route('buku.index') }}">Daftar Buku</a>
          <a class="nav-link" href="#">Daftar Peminjam</a>
          <a class="nav-link" href="#">Daftar Pengguna</a>
        </div>
        <div class="navbar-nav ms-auto">
          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="button btn-logout">Logout</button>
          </form>
      </div>
      </div>
    </div>
  </nav>