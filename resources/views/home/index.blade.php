@extends('layout.header')

@section('content')

<section class="desc">
    <div class="desc-text">
        <h5>Hello, Nama Saya</h5>
        <h1>{{ $name }}</h1>
        <h4>Saya dari {{ $kampus }}</h4>
        <h4>Jurusan {{ $jurusan }}</h4>
        <h4>Prodi {{ $prodi }}</h4>
        <br>
        <a href="https://www.instagram.com/tigorimam/">Contact Me <i class="ri-instagram-line"></i></a>
        <a href="https://github.com/TigorImamHamdani">Github <i class="ri-github-line"></i></a>
    </div>

    <div class="desc-img">
        <img src="img/main.png" width="300" heigth="300">
    </div>
</section>


@endsection
