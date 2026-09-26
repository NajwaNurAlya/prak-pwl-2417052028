@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-end">
        <div>
            <h1 class="page-title">User Management</h1>

            <p class="page-subtitle">
                Kelola data pengguna yang terdaftar pada sistem.
            </p>
        </div>
    </div>


    {{-- Statistik --}}

    <div class="row g-3">

        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-label">
                    Total Users
                </div>

                <div class="stat-number">
                    {{ count($users) }}
                </div>

            </div>
        </div>


        <div class="col-md-4">
            <div class="stat-card">

                <div class="stat-label">
                    Total Classes
                </div>

                <div class="stat-number">
                    4
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
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($users as $user)

                        <tr>

                            <td>
                                #{{ str_pad($user->id, 2, '0', STR_PAD_LEFT) }}
                            </td>

                            <td>
                                <span class="user-name">
                                    {{ $user->nama }}
                                </span>
                            </td>

                            <td>
                                {{ $user->nim }}
                            </td>

                            <td>
                                <span class="class-badge">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="text-center py-5">
                                Belum ada data pengguna.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection