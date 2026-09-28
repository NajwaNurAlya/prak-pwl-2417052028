<nav class="navbar navbar-expand-lg dark-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('user.index') }}">
            <span class="brand-icon">◆</span>
            Pemrograman Web Lanjut Sistem Informasi
        </a>
        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('user.index') }}"
               class="nav-link-custom">
                Users
            </a>
            <a href="{{ route('user.create') }}"
               class="btn btn-add-user">
                + Add User
            </a>
        </div>
    </div>
</nav>