<!DOCTYPE html>
<html>
<body>

    <h1>Selamat Admin</h1>
    <a href="{{ url('/admin') }}">|Admin|</a>
    <a href="{{ url('/dosen') }}">|Dosen|</a>
    <a href="{{ url('/mahasiswa') }}">|Mahasiswa|</a>
    <a href="{{ url('/tatausaha') }}">|Tata Usaha|</a>
    <a href="{{ url('/officeboy') }}">|Office Boy|</a> <br><br>

    {{ $Dashboard }} <br>
    {{ $DataMahasiswa }} <br>
    {{ $DataDosen }} <br>
    {{ $DataTU }} <br>
    {{ $DataOB }} <br>

</body>
</html>