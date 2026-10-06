@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h1 class="page-title">User Management</h1>
            <p class="page-subtitle">
                Kelola data pengguna yang terdaftar pada sistem.
            </p>
        </div>
        <a href="{{ url('/user/create') }}" class="btn-add-user text-decoration-none">
             + Tambah User
        </a>
    </div>


    {{-- Alert Success --}}
    @if (session('success'))
        <div class="alert custom-alert alert-success" role="alert">
            <div>
                <strong>Berhasil!</strong>
                <div>{{ session('success') }}</div>
            </div>

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>
        </div>
    @endif


    {{-- Alert Error --}}
    @if (session('error'))
        <div class="alert custom-alert alert-danger" role="alert">
            <div>
                <strong>Gagal!</strong>
                <div>{{ session('error') }}</div>
            </div>

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close">
            </button>
        </div>
    @endif


    {{-- Statistik --}}
    <div class="row g-3 mb-4">

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-label">Total Users</div>
                <div class="stat-number">
                    {{ count($users) }}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-label">Total Classes</div>
                <div class="stat-number">4</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-label">System Status</div>
                <div class="stat-number">Active</div>
            </div>
        </div>

    </div>


    {{-- Table --}}
    <div class="user-table-card">

        <div class="table-responsive">

            <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($users as $index => $user)

                        <tr>

                            {{-- No --}}
                            <td>
                                <span class="number-badge">
                                    {{ $index + 1 }}
                                </span>
                            </td>


                            {{-- Nama --}}
                            <td>
                                <span class="user-name">
                                    {{ $user->nama }}
                                </span>
                            </td>


                            {{-- NPM --}}
                            <td>
                                {{ $user->nim }}
                            </td>


                            {{-- Kelas --}}
                            <td>
                                <span class="class-badge">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>


                            {{-- Aksi --}}
                            <td class="text-center">

                                <div class="action-buttons">

                                    {{-- Edit --}}
                                    <a href="{{ route('user.edit', $user->id) }}"
                                       class="btn-action btn-edit">
                                        Edit
                                    </a>


                                    {{-- Hapus --}}
                                    <form action="{{ route('user.destroy', $user->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn-action btn-delete">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center empty-data">
                                Belum ada data pengguna.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


<style>
        .btn-add-user {
        background: #c9a7ff;
        color: #17131d;
        border: none;
        font-weight: 600;
        border-radius: 10px;
        padding: 9px 16px;
        transition: 0.2s;
    }

    .btn-add-user:hover {
        background: #b991f5;
        color: #17131d;
    }

    .number-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        background: #20202a;
        color: #c9a7ff;
        border-radius: 9px;
        font-size: 13px;
        font-weight: 600;
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 8px;
    }

    .btn-action {
        border: none;
        text-decoration: none;
        padding: 7px 13px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        transition: 0.2s;
    }

    .btn-edit {
        background: #29213a;
        color: #c9a7ff;
    }

    .btn-edit:hover {
        background: #3a2d4f;
        color: #d9c5ff;
        transform: translateY(-1px);
    }

    .btn-delete {
        background: #3a2226;
        color: #e9a4aa;
    }

    .btn-delete:hover {
        background: #512b30;
        color: #ffc4c9;
        transform: translateY(-1px);
    }

    .empty-data {
        padding: 50px !important;
        color: #858593;
    }

    .custom-alert {
        background: #181820;
        border-radius: 14px;
        padding: 16px 18px;
        margin-bottom: 22px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .custom-alert.alert-success {
        border: 1px solid #4f8f68;
        color: #b8e6c8;
    }

    .custom-alert.alert-danger {
        border: 1px solid #a65353;
        color: #f1b5b5;
    }

    .custom-alert .btn-close {
        filter: invert(1);
    }

</style>

@endsection