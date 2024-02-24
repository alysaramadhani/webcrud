@extends('layouts.main')
@section('title')
    Ekstrakulikuler
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="h1 mb-3 fw-bold">Ekstrakulikuler</h1>
        </div>
        <div class="col-12 my-3">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Ekstrakurikuler</th>
                        <th scope="col">Nama Pembina</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>PMR</td>
                        <td>Bu tatik</td>
                        <td>Di mana kegiatan ekstra ini memfokuskan pada materi-materi Kesehatan, Pertolongan Pertama (PP), Penanggulangan Pada Gawat Darurat (PPGD) dan bidang sosial.</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Teater</td>
                        <td>Bu Fara</td>
                        <td>Teater merupakan salah satu salah satu seni bermain peran (drama) yang menyajikan cerita kehidupan nyata di atas pentas</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Paduan Suara</td>
                        <td>Bu Putri</td>
                        <td>Paduan suara adalah kelompok atau ansambel vokal yang terdiri dari beberapa penyanyi yang menyanyikan suara atau nada bersama-sama.</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>OSIS</td>
                        <td>Bu Widi</td>
                        <td>Organisasi yang menaungi organisasi ekstra lainya di dalam tingkat satua.</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Volly</td>
                        <td>Pak Imam</td>
                        <td>Voli adalah olahraga tim yang dimainkan oleh dua tim yang berusaha mengirim bola melintasi net dan jatuh di lapangan lawan. Setiap tim terdiri dari enam pemain yang berada di lapangan pada saat yang sama.</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
