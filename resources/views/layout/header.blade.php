<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!---Style css--->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!---Icon Remixicon--->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!---Google Font--->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">


    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <ul class="navlist">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">Profil</a></li>
            <li><a href="{{ url('/info') }}">Info</a></li>
        </ul>

        <a href="{{ url('/home') }}" class="logo">TIGOR IMAM</a>

        <div class="bx bx-menu" id="menu-icon"></div>

    </header>

    @yield('content')

    <!---Custom js link --->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!---Custom js --->
    <script src="js/script.js"></script>
</body>

</html>
