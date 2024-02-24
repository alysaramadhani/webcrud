@extends('layouts.main')

{{-- Section Title --}}
@section('title')
    Student
@endsection

{{-- Section Content --}}
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="h1 mb-3 fw-bold">
                {{ $title }}
            </h1>
        </div>

        <div class="col-12">
            <form action="{{ route('student.index') }}" method="get">
                @csrf
                <div class="input-group mb-3">
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Cari Siswa Berdasarkan Nama"
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
                <a href="{{ route('student.create') }}" class="btn btn-primary fw-bold">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Siswa
                </a>
            </div>
        </div>
        <div class="col-12 my-3">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Kelas</th>
                        @auth
                        <th scope="col">Aksi</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $student->nis }}</td>
                            <td>{{ $student->nama }}</td>
                            <td>{{ $student->tanggal_lahir }}</td>
                            <td>{{ $student->kelas->nama_kelas }}</td>
                            <td class="d-flex">
                                <button class="btn btn-primary btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal/{{ $student->id }}">
                                    <i class="bi bi-eye"></i>
                                </button>
                                @auth
                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning text-white btn-sm mx-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('student.destroy', $student->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <button type="submit" class="btn btn-danger btn-sm mx-1"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i>
                                </form>
                                @endauth
                            </td>
                        </tr>

                        @include('pages.student.modal')

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12">
            {{ $students->links() }}
        </div>
    </div>
@endSection
