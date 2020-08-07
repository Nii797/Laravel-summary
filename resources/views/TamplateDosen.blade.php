<!DOCTYPE html>
<html>
<body>
    <h1>Selamat Datang Dosen</h1>
    Nama        : {{$nama}} <br>
    Mata Kuliah : {{$matkul}} <br>
    ALamat      : {{$alamat}} <br>
    Jurusan     : {{$jurusan}} <br>

    Buka link admin : <a href="{{ url('/admin') }}">Admin</a>
</body>
</html>