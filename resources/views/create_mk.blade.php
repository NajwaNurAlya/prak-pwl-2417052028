@extends('layouts.app')

@section('content')

<div class="container">

    <div class="create-wrapper">

        <h1 class="page-title">
            Buat Mata Kuliah Baru
        </h1>

        <p class="page-subtitle">
            Tambahkan data mata kuliah baru ke dalam sistem.
        </p>


        <form action="{{ route('matakuliah.store') }}"
              method="POST">

            @csrf

            {{-- Nama Mata Kuliah --}}
            <div class="mb-4">

                <label for="nama_mk" class="form-label-custom">
                    Nama Mata Kuliah
                </label>

                <input type="text"
                       id="nama_mk"
                       name="nama_mk"
                       class="form-control custom-input"
                       placeholder="Masukkan nama mata kuliah"
                       required>

            </div>


            {{-- SKS --}}
            <div class="mb-4">

                <label for="sks" class="form-label-custom">
                    SKS
                </label>

                <input type="number"
                       id="sks"
                       name="sks"
                       class="form-control custom-input"
                       placeholder="Masukkan jumlah SKS"
                       min="1"
                       required>

            </div>


            {{-- Button --}}
            <div class="d-flex gap-2">

                <button type="submit" class="btn-save">
                    Simpan Mata Kuliah
                </button>

                <a href="{{ url('/matakuliah') }}"
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

    .custom-input::placeholder {
        color: #999;
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
        text-decoration: none;
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