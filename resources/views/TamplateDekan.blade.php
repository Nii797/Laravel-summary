<!DOCTYPE html>
<html>
<body>
<h1>Selamat Dekan</h1>

    <form action="{{ action('ControllerAdmin@indexdekan') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama          : <input type="text" name="namadekan"><br>
        Jabatan       : <input type="text" name="jabatan"><br>
        Dekan Jurusan : <input type="text" name="dekanjurusan"><br>
        ALamat        : <input type="text" name="alamat"><br>
        <input type="submit" value="Simpan">
    </form>

    Kembali ke <a href="{{url('/admin')}}">Admin</a>

</body>
</html>