@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA MAHASISWA</h1>

    <form action="{{ action('ControllerAdmin@prosesinputmhs') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama    : <input type="text" name="nama"> <br> 
        kelas   : <input type="text" name="kelas"> <br>
        ALamat  : <input type="text" name="alamat"> <br>
        Jurusan : <input type="text" name="jurusan"> <br>
        <input type="submit" value="Masuk">
    </form>

    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Jurusan</td>
        </tr>
        @foreach($data_mahasiswa as $data)
        <tr>
            <td>{{ $data->mahasiswa_nama }}</td>
            <td>{{ $data->mahasiswa_kelas }}</td>
            <td>{{ $data->mahasiswa_alamat }}</td>
            <td>{{ $data->mahasiswa_jurusan }}</td>
        </tr>
        @endforeach
    </table>

@endsection