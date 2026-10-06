<nav class="dark-navbar">
    <div class="container d-flex justify-content-between align-items-center">

        {{-- Logo / Brand --}}
        <a href="{{ url('/user') }}" class="navbar-brand text-decoration-none">
            <span class="brand-icon">◆</span>
            Pemrograman Web Lanjut Sistem Informasi
        </a>


        {{-- Navigation --}}
        <div class="d-flex align-items-center gap-4">

            <a href="{{ url('/user') }}" class="nav-link-custom">
                Users
            </a>

            <a href="{{ url('/matakuliah') }}" class="nav-link-custom">
                Mata Kuliah
            </a>

        </div>

    </div>
</nav>