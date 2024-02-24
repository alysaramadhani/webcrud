@extends('layouts.main')

{{-- Section Title --}}
@section('title')
    Tambah Siswa
@endsection

{{-- Section Content --}}
@section('content')
    <div class="row">

        {{-- Title Page : Start --}}
        <div class="col-12">
            <h1 class="h1 mb-3 fw-bold">
                Ubah Siswa
            </h1>
        </div>
        {{-- Title Page : End --}}

        {{-- Form : Start --}}
        <form action="{{ route('student.update', $students->id) }}" method="post" enctype="multipart/form-data" class="row">
            @csrf

            {{-- Input NISN : Start --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="nis" class="form-label">Masukkan NISN</label>
                    <input
                    type="text"
                    class="form-control"
                    id="nis"
                    placeholder="Masukkan NISN"
                    name="nis"
                    value="{{ $students->nis ?? old('nis') }}"
                    >
                </div>
            </div>
            {{-- Input NISN : End --}}

            {{-- Dropdown Kelas : Start --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Pilih Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas_id">
                        @foreach ($classes as $class)
                            @if ($students->kelas_id != $class->id)
                                <option value="{{ $class->id }}">{{ $class->nama_kelas }}</option>
                            @else
                                <option value="{{ $class->id }}" selected >{{ $class->nama_kelas }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- Dropdown Kelas : End --}}

            {{-- Input Nama Kelas : Start --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="nama" class="form-label">Masukkan Nama Siswa</label>
                    <input
                    type="text"
                    class="form-control"
                    id="nama"
                    placeholder="Masukkan Nama Siswa"
                    name="nama"
                    value="{{ $students->nama ?? old('nama') }}"
                    >
                </div>
            </div>
            {{-- Input Nama Kelas : End --}}

            {{-- Input Tanggal Lahir : Start --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Masukkan Tanggal Lahir</label>
                    <input
                    type="date"
                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    id="tanggal_lahir"
                    name="tanggal_lahir"
                    value="{{ $students->tanggal_lahir ?? old('tanggal_lahir') }}"
                    >
                </div>
            </div>
            {{-- Input Tanggal Lahir : End --}}

            {{-- Textarea Alamat : Start --}}
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Masukkan Alamat</label>
                    <textarea
                    class="form-control @error('alamat') is-invalid @enderror"
                    id="alamat"
                    rows="3"
                    name="alamat"
                    value="{{ $students->alamat ?? old('alamat') }}"
                    >{{ $students->alamat ?? old('alamat') }}</textarea>
                </div>
            </div>
            {{-- Textarea Alamat : End --}}

            {{-- Button Submit : Start --}}
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary fw-bold">
                    <i class="bi bi-pencil-square"></i>
                    Ubah
                </button>
            </div>
            {{-- Button Submit : End --}}

        </form>
        {{-- Form : End --}}

    </div>
@endsection
