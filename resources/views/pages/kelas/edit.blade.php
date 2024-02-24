@extends('layouts.main')
@section('title')
    Tambah Kelas
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="h1 mb-3 fw-bold">
                Tambah Kelas
            </h1>
        </div>
        <form action="{{ route('kelas.update', $class->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="name_kelas" class="form-label">Masukkan Nama Kelas</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="name_kelas" 
                    placeholder="Masukkan Nama Kelas"
                    name="nama_kelas"
                    value="{{ $class->nama_kelas, old('nama_kelas') }}"
                    >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary fw-bold">
                        <i class="bi bi-pencil-square"></i>
                        Ubah
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
