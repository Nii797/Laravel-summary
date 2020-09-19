<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kampus Laravel</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    <style type="text/css">
        .pagination li {
            float:left;
            list-style-type:none;
            margin:5px;
        }
    </style>

    <header>
        <h1>SELAMAT DATANG ADMIN</h1>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin') }}">Beranda <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dekan') }}">Dekan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dosen') }}">Dosen</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/tatausaha') }}">Tata Usaha</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/perpustakaan') }}">Perpustakaan</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/officeboy') }}">Office Boy</a>
                            </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
    </header>

    <!-- Bagian isi judul halaman -->
    <h3> @yield('judul_halaman') </h3>

    <!-- Bagian kontent isi kontent -->
    <h3> @yield('kontent') </h3>

    <!-- Bagian kontent footer -->
    <footer>
        <p>&copy; Phanterason_Parduz Kembali ke <a href="{{url('/admin')}}">Dasboard</a></p>
    </footer>

</body>
</html>