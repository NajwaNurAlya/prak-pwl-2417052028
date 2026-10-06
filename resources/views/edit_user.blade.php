@extends('layouts.app')

@section('content')

<div class="container">

    <div class="create-wrapper">

        <h1 class="page-title">
            Edit Pengguna
        </h1>

        <p class="page-subtitle">
            Perbarui data pengguna yang terdaftar pada sistem.
        </p>


        <form action="{{ route('user.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')


            {{-- Nama --}}
            <div class="mb-4">

                <label for="nama" class="form-label-custom">
                    Nama
                </label>

                <input type="text"
                       id="nama"
                       name="nama"
                       class="form-control custom-input"
                       value="{{ $user->nama }}"
                       required>

            </div>


            {{-- NPM --}}
            <div class="mb-4">

                <label for="nim" class="form-label-custom">
                    NPM
                </label>

                <input type="text"
                       id="nim"
                       name="nim"
                       class="form-control custom-input"
                       value="{{ $user->nim }}"
                       required>

            </div>


            {{-- Kelas --}}
            <div class="mb-4">

                <label for="kelas" class="form-label-custom">
                    Kelas
                </label>

                <input type="text"
                       id="kelas"
                       name="kelas"
                       class="form-control custom-input"
                       value="{{ $user->nama_kelas ?? '' }}"
                       placeholder="Contoh: A"
                       required>

            </div>


            {{-- Button --}}
            <div class="d-flex gap-2">

                <button type="submit" class="btn-save">
                    Simpan Perubahan
                </button>

                <a href="{{ url('/user') }}"
                   class="btn-cancel">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>


<style>

    .create-wrapper {
        width: 100%;
        max-width: 1215px;
        margin: 0 auto;
    }

    .form-label-custom {
        color: #f5f5f5;
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 8px;
        display: block;
    }

    .custom-input {
        width: 100%;
        background: #ffffff !important;
        border: 1px solid #d8d8d8 !important;
        border-radius: 8px;
        padding: 13px 15px;
        font-size: 16px;
        color: #222 !important;
    }

    .custom-input:focus {
        background: #ffffff !important;
        border-color: #c9a7ff !important;
        box-shadow: 0 0 0 3px rgba(201, 167, 255, 0.15) !important;
        color: #222 !important;
    }

    .btn-save {
        background: #c9a7ff;
        color: #17131d;
        border: none;
        border-radius: 9px;
        padding: 11px 18px;
        font-weight: 600;
        transition: 0.2s;
    }

    .btn-save:hover {
        background: #b991f5;
        color: #17131d;
        transform: translateY(-1px);
    }

    .btn-cancel {
        background: #292936;
        color: #d8d8e0;
        border: none;
        border-radius: 9px;
        padding: 11px 18px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.2s;
    }

    .btn-cancel:hover {
        background: #353542;
        color: #ffffff;
    }

</style>

@endsection