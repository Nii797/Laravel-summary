<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kampus Laravel</title>
</head>
<body>

    <header>
        <h1>SELAMAT DATANG ADMIN</h1>
        <nav>
            <a href="{{ url('/admin') }}">|Beranda|</a>
            <a href="{{ url('/dekan') }}">|Dekan|</a>
            <a href="{{ url('/dosen') }}">|Dosen|</a>
            <a href="{{ url('/mahasiswa') }}">|Mahasiswa|</a>
            <a href="{{ url('/tatausaha') }}">|Tata Usaha|</a>
            <a href="{{ url('/perpustakaan') }}">|Perpustakaan|</a>
            <a href="{{ url('/Officeboy') }}">|Office Boy|</a> <br><br>
        </nav>
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