<!DOCTYPE html>
<html>
<body>
    <h1>Selamat Datang TU</h1>
    Nama : {{ $namatu }} <br>
    Bagian : {{ $bagian }} <br>
    jabatan : {{ $jabatan }} <br><br>

    <form action="{{ action('ControllerAdmin@prosesinputTU') }}" method="post">
        Nama    = <input type="text" name="nama"><br>
        Bagian  = <input type="text" name="bagian"><br>
        Jabatan = <input type="text" name="jabatan"><br>

        <input type="submit" value="Masuk"> 
    </form>

    Kembali ke<a href="{{ url('/admin') }}">Admin</a>
</body>
</html>