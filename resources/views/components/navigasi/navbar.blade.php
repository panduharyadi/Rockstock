<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow" style="background-color: white;">
    <div class="container">
      <a class="navbar-brand logo brand" href="/" style="font-size: 25px; font-weight: 600; letter-spacing: 1px;"><img src="{{ asset('assets/Logo.png') }}" alt="" width="100" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-6" id="navbarNav">
        <ul class="navbar-nav ms-auto m-2">
          {{-- @if (Request::segment(1) !== 'admin') --}}
    @if(!Auth::user())
          <li class="nav-item dropdown mx-2 nav-hov">
            <a class="nav-link dropdown-toggle
            {{-- {{ Request::is('tentang') ? 'active' : '' }}
            {{ Request::is('sertifikasi') ? 'active' : '' }}  --}}
            " href="/" role="button" aria-expanded="false"  data-bs-toggle="dropdown">
              Profil
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/tentang">Tentang Kami</a></li>
              <li><a class="dropdown-item" href="/sertifikasi">Sertifikasi</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown mx-2 nav-hov">
            <a class="nav-link dropdown-toggle
            {{-- {{ Request::is('proteksi') ? 'active' : '' }}
            {{ Request::is('shigh') ? 'active' : '' }} 
            {{ Request::is('bridge') ? 'active' : '' }} 
            {{ Request::is('insulation') ? 'active' : '' }} 
            {{ Request::is('heavy') ? 'active' : '' }} 
            {{ Request::is('jetty') ? 'active' : '' }}  --}}
            " href="/" role="button" aria-expanded="false"  data-bs-toggle="dropdown">
              Produk
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-bold" href="/#">Proteksi Korosi</a>
                <ul class="" style="list-style-type:none;">
                  <li><a class="dropdown-item " href="/penetrating">Penetrating Primer</a></li>
                  <li><a class="dropdown-item " href="/proteksi">Rostomastic</a></li>
                  <li><a class="dropdown-item " href="/#">Rostoshop Primer</a></li>
                </ul>
              </li>

              <li><a class="dropdown-item fw-bold" href="/#">Thermal Coating</a>
                <ul class="" style="list-style-type:none;">
                  <li><a class="dropdown-item " href="/#">High Temperature</a></li>
                  <li><a class="dropdown-item " href="/#">Epoxy Hybrida</a></li>
                </ul>
              </li>

              <li><a class="dropdown-item fw-bold" href="/#">Chemical and Weater Resistance</a>
                <ul class="" style="list-style-type:none;">
                  <li><a class="dropdown-item " href="/#">Chemical Resistance</a></li>
                  <li><a class="dropdown-item " href="/#">Rostothane</a></li>
                </ul>
              </li>

              <li><a class="dropdown-item fw-bold" href="/insulation">Tank Lining</a></li>
              <li><a class="dropdown-item fw-bold" href="/heavy">Floring</a></li>

              <li><a class="dropdown-item fw-bold" href="/#">Marine Coating</a>
                <ul class="" style="list-style-type:none;">
                  <li><a class="dropdown-item " href="/#">Rostomastic</a></li>
                  <li><a class="dropdown-item " href="/#">Rostocoat Alumunium</a></li>
                  <li><a class="dropdown-item " href="/#">Rostovina</a></li>
                  <li><a class="dropdown-item " href="/#">Rostobiofull</a></li>
                </ul>
              </li>

              <li><a class="dropdown-item fw-bold" href="/#">Special Coating</a>
                <ul class="" style="list-style-type:none;">
                  <li><a class="dropdown-item " href="/#">Fire Arm Coating</a></li>
                  <li><a class="dropdown-item " href="/#">SingRub Coating</a></li>
                  <li><a class="dropdown-item " href="/#">Under Water Coating</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- <li class="nav-item dropdown mx-2">
            <a class="nav-link dropdown-toggle 
            {{-- {{ Request::is('auditor') ? 'active' : '' }} 
            {{ Request::is('perekayasa') ? 'active' : '' }} 
            {{ Request::is('manajer') ? 'active' : '' }}
            {{ Request::is('radiografi') ? 'active' : '' }}
            {{ Request::is('keamanan') ? 'active' : '' }}
            {{ Request::is('penanganan') ? 'active' : '' }} --}}
            " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/auditor">Skema Auditor Sistem <br>Manajemen Mutu</a></li>
              <li><a class="dropdown-item" href="/perekayasa">Skema Perekayasa <br>Nano Material</a></li>
              <li><a class="dropdown-item" href="/manajer">Skema Manajer <br>Kekayaan  Intelektual</a></li>
              <li><a class="dropdown-item" href="/radiografi">Skema Radiografi <br>Uji Tak Rusak</a></li>
              <li><a class="dropdown-item" href="/keamanan">Skema Keamanan <br>Sistem Informasi</a></li>
              <li><a class="dropdown-item" href="/penanganan">Penanganan Banding</a></li>
            </ul>
          </li> -->

          <li class="nav-item mx-2">
            <a class="nav-link nav-hov" href="/under" role="button" aria-expanded="false">Portofolio</a>
          </li>

          <li class="nav-item mx-2">
            <a class="nav-link nav-hov" href="/beritas" role="button" aria-expanded="false">Berita/Artikel</a>
          </li>
          
          <li class="nav-item mx-2">
            <a class="nav-link nav-hov" href="/login" role="button" aria-expanded="false">Login</a>
          </li>

          <li class="nav-item mx-1">
            <a href="/kontak" class="btn text-white custom-bg shadow-none paragraf ">Kontak Kami</a>
          </li>
         

    @else()
          <li class="nav-item mx-2">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}" role="button" aria-expanded="false">Dashboard</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link {{ Request::is('kategori') ? 'active' : '' }}" href="{{route('admin.kategori')}}" role="button" aria-expanded="false">Kategori</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="{{route('admin.produk')}}" role="button" aria-expanded="false">Produk</a>
          </li>
            {{-- <li class="nav-item mx-2">
                <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{route('admin.berita')}}" role="button" aria-expanded="false">Artikel</a>
            </li>
            <li class="nav-item mx-2">
                <a href="{{ route('admin.kategori') }}" class="nav-link {{ Request::is('kategori') ? 'active' : '' }}" role="button" aria-expanded="false">Kategori</a>
            </li> --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li class="nav-item mx-1">
                <a href="route('logout')"  onclick="event.preventDefault(); this.closest('form').submit();" class="btn text-white custom-bg shadow-none paragraf">Logout</a>
                </li>
            </form>   
    @endif

          {{-- <li class="nav-item dropdown mx-2">
            <a class="nav-link 
            {{ Request::is('artikel') ? 'active' : '' }}
            " href="/artikels" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Artikel
            </a>
          </li> --}}
        </ul>


      </div>
    </div>
  </nav>



 