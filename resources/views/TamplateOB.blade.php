<!DOCTYPE html>
<html>
<body>
    <h1>Selamat datang Office Boy</h1>
    ID      : {{ $id }} <br>
    Nama    : {{ $nama }} <br>
    Alamat  ; {{ $alamat }} <br><br>

    <form action="{{action('ControllerAdmin@prosesinputOB')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        ID      : <input type="text" name="id"><br>
        Nama    : <input type="text" name="nama"><br>
        Alamat  : <input type="text" name="alamat"><br>
        <input type="submit" value="Masuk">
    </form>

    Kembali ke<a href="{{ url('/admin') }}">Admin</a>
</body>
</html>