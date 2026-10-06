@extends('layouts.app')

@section('content')

<div class="container">

    <div class="edit-wrapper">

        {{-- Header --}}
        <div class="mb-4">
            <h1 class="page-title">Edit Mata Kuliah</h1>

            <p class="page-subtitle">
                Perbarui informasi mata kuliah yang dipilih.
            </p>
        </div>


        {{-- Form Card --}}
        <div class="edit-card">

            <form action="{{ route('matakuliah.update', $mk->id) }}"
                  method="POST">

                @csrf
                @method('PUT')


                {{-- Nama Mata Kuliah --}}
                <div class="mb-4">

                    <label for="nama_mk" class="form-label-custom">
                        Nama Mata Kuliah
                    </label>

                    <input type="text"
                           name="nama_mk"
                           id="nama_mk"
                           class="form-control custom-input"
                           value="{{ $mk->nama_mk }}"
                           required>

                </div>


                {{-- SKS --}}
                <div class="mb-4">

                    <label for="sks" class="form-label-custom">
                        SKS
                    </label>

                    <input type="number"
                           name="sks"
                           id="sks"
                           class="form-control custom-input"
                           value="{{ $mk->sks }}"
                           min="1"
                           required>

                </div>


                {{-- Buttons --}}
                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn btn-save">
                        Simpan Perubahan
                    </button>

                    <a href="{{ url('/matakuliah') }}"
                       class="btn btn-cancel">
                        Batal
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>


<style>

    .edit-wrapper {
        max-width: 750px;
        margin: 0 auto;
    }


    .edit-card {
        background: #181820;
        border: 1px solid #292936;
        border-radius: 18px;
        padding: 30px;
    }


    .form-label-custom {
        color: #cfcfd8;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 9px;
        display: block;
    }


    .custom-input {
        background: #20202a !important;
        border: 1px solid #353542 !important;
        color: #f5f5f5 !important;
        border-radius: 10px;
        padding: 12px 14px;
    }

    .custom-input:focus {
        background: #20202a !important;
        border-color: #c9a7ff !important;
        box-shadow: 0 0 0 3px rgba(201, 167, 255, 0.12) !important;
        color: #ffffff !important;
    }


    .btn-save {
        background: #c9a7ff;
        color: #17131d;
        border: none;
        border-radius: 10px;
        padding: 10px 18px;
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
        color: #cfcfd8;
        border: none;
        border-radius: 10px;
        padding: 10px 18px;
        font-weight: 600;
        transition: 0.2s;
    }

    .btn-cancel:hover {
        background: #353542;
        color: #ffffff;
    }

</style>

@endsection