@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA DOSEN</h1>

    <form action="{{ action('ControllerAdmin@prosesinputdosen') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama    : <input type="text" name="nama"><br>
        ALamat  : <input type="text" name="alamat"><br>
        <input type="submit" value="Simpan">
    </form>

    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jurusan</td>
        </tr>
        @foreach($data_dosen as $data)
        <tr>
            <td>{{ $data->dosen_nama }}</td>
            <td>{{ $data->dosen_alamat }}</td>
            <td>{{ $data->dosen_jurusan }}</td>
        </tr>
        @endforeach
    </table>

@endsection