<!DOCTYPE html>
<html>
<body>

    <h1>Selamat Admin</h1>
    <a href="{{ url('/admin') }}">|Admin|</a>
    <a href="{{ url('/Dosen') }}">|Dosen|</a>
    <a href="{{ url('/Mahasiswa') }}">|Mahasiswa|</a>
    <a href="{{ url('/tatausaha') }}">|Tata Usaha|</a> <br><br>

    {{ $Dashboard }} <br>
    {{ $DataMahasiswa }} <br>
    {{ $DataDosen }} <br>
    {{ $DataTU }} <br>
    
</body>
</html>