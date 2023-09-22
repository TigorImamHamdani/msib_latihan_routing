@extends('layout.header')

@section('content')

<section class="desc">
    <div class="desc-text">
        <h1>About Me</h1>
        <br>
        <h4>Hai, nama saya {{ $name }}. Saya ingin menjadi Pengembang Full-stack.
            Saya mahasiswa semester 7 {{ $kampus }} jurusan {{ $jurusan }},
            Program Studi {{ $prodi }}. Sebagai mahasiswa jurusan {{ $jurusan }},
            saya memiliki keahlian di bidang HTML, CSS, dan JavaScript.
            Saya bersemangat membuat antarmuka yang menarik dan responsif serta mengoptimalkan
            pengalaman pengguna menggunakan kerangka kerja seperti Laravel.</h4>
        <br>
        <a href="https://www.instagram.com/tigorimam/">Contact Me <i class="ri-instagram-line"></i></a>
        <a href="https://github.com/TigorImamHamdani">Github <i class="ri-github-line"></i></a>
    </div>
    <div class="desc-img">
        <img src="img/logo.png" width="300" heigth="300">
    </div>
</section>

@endsection
