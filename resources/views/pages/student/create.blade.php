@extends('layouts.main')

@section('title')
    Tambah Siswa
@endsection

@section('content')
    <div class="row">

        
        <div class="col-12">
            <h1 class="h1 mb-3 fw-bold">
                Tambah Siswa
            </h1>
        </div>

        <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data" class="row">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="nis" class="form-label">Masukkan NISN</label>
                    <input
                    type="text"
                    class="form-control"
                    id="nis"
                    placeholder="Masukkan NISN"
                    name="nis"
                    value="{{ old('nis') }}"
                    >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Pilih Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas_id">
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="nama" class="form-label">Masukkan Nama Siswa</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="nama" 
                    placeholder="Masukkan Nama Siswa"
                    name="nama"
                    value="{{ old('nama') }}"
                    >
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Masukkan Tanggal Lahir</label>
                    <input
                    type="date"
                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    id="tanggal_lahir"
                    name="tanggal_lahir"
                    value="{{ old('tanggal_lahir') }}"
                    >
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Masukkan Alamat</label>
                    <textarea
                    class="form-control @error('alamat') is-invalid @enderror"
                    id="alamat"
                    rows="3"
                    name="alamat"
                    value="{{ old('alamat') }}"
                    ></textarea>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary fw-bold">
                    <i class="bi bi-plus-circle"></i>
                    Tambah
                </button>
            </div>

        </form>

    </div>
@endsection
