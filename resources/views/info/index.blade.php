@extends('layout.header')

@section('content')

<section class="desc">
    <div class="desc-text">
        <h1>Campus Info</h1>
        <h4>Politeknik Negeri Malang (Polinema) adalah salah satu perguruan tinggi vokasi yang terletak di
            Kota Malang, Jawa Timur, Indonesia. Polinema dikenal sebagai salah satu perguruan tinggi terkemuka di
            Indonesia dalam bidang pendidikan vokasi dan teknologi. Berikut Jurusan di Politeknik Negeri Malang:</h4>
            <br>
        <ul>
            {{-- digunakan untuk penomoran berdasarkan jumlah array --}}
            @php
                $no=1;
            @endphp
            @foreach($jk as $jurusan)
                <li> {{$no++}}. {{$jurusan}}</li>
            @endforeach
        </ul>
        <br>
        <a href="https://www.instagram.com/polinema_campus/">Contact Us <i class="ri-instagram-line"></i></a>
    </div>

    <div class="desc-img">
        <img src="img/gedung.jpg" width="400" heigth="400">
    </div>
</section>


@endsection
