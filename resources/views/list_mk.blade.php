@extends('layouts.app')

@section('content')

<div class="container">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h1 class="page-title">Mata Kuliah</h1>

            <p class="page-subtitle">
                Kelola data mata kuliah yang tersedia pada sistem.
            </p>
        </div>

        <a href="{{ route('matakuliah.create') }}" class="btn btn-add-mk">
            + Tambah Mata Kuliah
        </a>
    </div>


    {{-- Alert Success --}}
    @if (session('success'))
        <div class="alert alert-success custom-alert" role="alert">
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
        <div class="alert alert-danger custom-alert" role="alert">
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
                <div class="stat-label">
                    Total Mata Kuliah
                </div>

                <div class="stat-number">
                    {{ count($mks) }}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-label">
                    Total SKS
                </div>

                <div class="stat-number">
                    {{ $mks->sum('sks') }}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-label">
                    System Status
                </div>

                <div class="stat-number">
                    Active
                </div>
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
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($mks as $index => $mk)

                        <tr>

                            <td>
                                <span class="number-badge">
                                    {{ $index + 1 }}
                                </span>
                            </td>

                            <td>
                                <span class="user-name">
                                    {{ $mk->nama_mk }}
                                </span>
                            </td>

                            <td>
                                <span class="class-badge">
                                    {{ $mk->sks }} SKS
                                </span>
                            </td>

                            <td class="text-center">

                                <div class="action-buttons">

                                    {{-- Edit --}}
                                    <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                       class="btn-action btn-edit">
                                        Edit
                                    </a>


                                    {{-- Delete --}}
                                    <form action="{{ route('matakuliah.destroy', $mk->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn-action btn-delete"
                                                onclick="return confirm('Yakin ingin menghapus mata kuliah ini?')">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="text-center empty-data">
                                Belum ada data mata kuliah.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


{{-- Style khusus halaman Mata Kuliah --}}
<style>

    .btn-add-mk {
        background: #c9a7ff;
        color: #17131d;
        border: none;
        font-weight: 600;
        border-radius: 10px;
        padding: 10px 17px;
        transition: 0.2s;
    }

    .btn-add-mk:hover {
        background: #b991f5;
        color: #17131d;
        transform: translateY(-1px);
    }


    /* Alert */

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


    /* Number */

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


    /* Action */

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


    /* Empty */

    .empty-data {
        padding: 50px !important;
        color: #858593;
    }

</style>

@endsection