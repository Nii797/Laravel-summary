<!DOCTYPE html>
<html>
<body>
    <h1>Selamat Datang</h1>
    Nama : {{$nama}} <br>
    Kelas : {{$kelas}} <br>
    ALamat : {{$alamat}} <br>
    Jurusan : {{$jurusan}} <br><br>

    <form action="{{ action('ControllerAdmin@prosesinputmhs') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama    : <input type="text" name="nama"> <br> 
        kelas   : <input type="text" name="kelas"> <br>
        ALamat  : <input type="text" name="alamat"> <br>
        Jurusan : <input type="text" name="jurusan"> <br>
        <input type="submit" value="Masuk">
    </form>

    Kembali ke<a href="{{ url('/admin') }}">Admin</a>

</body>
</html>