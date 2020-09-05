@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA DOSEN</h1>

    <form action="{{ url('dosen/tambahdosen') }}" method="post">
        {{ csrf_field() }}
        ID Dosen : <input type="text" name="iddosen" require="require"><br>
        Nama     : <input type="text" name="namadosen" require="require"><br>
        ALamat   : <input type="text" name="alamatdosen" require="require"><br>
        Jurusan  : <input type="text" name="jurusandosen" require="require"><br>
        <input type="submit" value="Simpan">
    </form>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jurusan</td>
        </tr>
    </table>

@endsection