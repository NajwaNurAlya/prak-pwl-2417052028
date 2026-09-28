@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h1>Buat Pengguna Baru</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input
            type="text"
            id="nama"
            name="nama"
            class="form-control">
        <br>
        <label for="npm">NPM:</label><br>
        <input
            type="text"
            id="npm"
            name="npm"
            class="form-control">
        <br>
        <label for="kelas">Kelas:</label><br>
        <select
            name="kelas_id"
            id="kelas_id"
            class="form-select">
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select>
        <br>
        <button
            type="submit"
            class="btn btn-primary">
            Submit
        </button>
    </form>
</div>
@endsection