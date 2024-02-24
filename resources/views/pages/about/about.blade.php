@extends('layouts.main')
@section('title')
About
@endsection
@section('content')
    <div class="row align-items-center" style="height: 80vh;">

        {{-- Image : Start --}}
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div 
            class="bg-danger rounded-circle" 
            style="
            width: 350px; 
            height: 350px; 
            background-image: url({{ asset('images/icha.jpeg') }}); 
            background-size: cover; 
            background-position: top -100px center;">
             
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="h1 mb-3 fw-bold">About Me</h1>
            <div class="row">
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item">Name : Alysa Oktavia Ramadhani</li>
                        <li class="list-group-item">Age : 16</li>
                        <li class="list-group-item">Class : 11 PPLG 1</li>
                        <li class="list-group-item">Address : Kudus</li>
                        <li class="list-group-item">Hobby : Voli</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection