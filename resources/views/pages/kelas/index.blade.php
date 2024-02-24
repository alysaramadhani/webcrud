@extends('layouts.main')

@section('title')
    Kelas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="h1 mb-3 fw-bold">
                {{ $title }}
            </h1>
        </div>
        <div class="col-12">
            <form action="{{ route('kelas.index') }}" method="get">
                @csrf
                <div class="input-group mb-3">
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Cari Kelas Berdasarkan Nama"
                    name="search"
                    value="{{ old('search') }}"
                    >
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-12">
            <div class="d-grid gap-2">
                <a href="{{ route('kelas.create') }}" class="btn btn-primary fw-bold">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Kelas
                </a>
            </div>
        </div>
        <div class="col-12 my-3">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kelas</th>
                        @auth
                        <th scope="col">Aksi</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>

                    {{-- Dummy Data --}}
                    @foreach ($classes as $class)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $class->nama_kelas }}</td>
                        @auth
                        <td class="d-flex">
                            <a href="{{ route('kelas.edit', $class->id) }}" class="btn btn-primary btn-sm mx-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('kelas.destroy', $class->id) }}" method="post">
                                @csrf

                                <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                        @endauth
                    </tr>
                    @endforeach
 
                </tbody>
            </table>
        </div>
        <div class="col-12">
            {{ $classes->links() }}
        </div>


    </div>
@endSection
