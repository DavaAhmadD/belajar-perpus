@extends('layouts.app')
@section('content')
    <div id="home" class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex align-items-center md-0 order-lg-first">
                <img src="{{ asset('bootstrap/img/Animasi Buku.gif') }}" width="90%" height="90%" alt="Animasi Buku" class="gambar m">

            </div>
            <div class="col-md-6 p-5 test brand-text d-flex flex-column align-items-center justify-content-center col-sm-12">
                <div class="row">
                    <h1 class="fw-bold textHome p-0 text-e text-dashboard" style="font-size: 70px;">PERPUSTAKAAN</h1>
                    <h4 class="text-dashboard">Welcome</h4>
                </div>
            </div>
        </div>
    </div>
@endsection