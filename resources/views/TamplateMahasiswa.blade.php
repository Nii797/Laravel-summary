@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA MAHASISWA</h1>

    <form action="{{ url('/dosen/tambahmahasiswa') }}" method="post">
        {{ csrf_field() }}
        ID      : <input type="text" name="idmahasiswa" require="require">
        Nama    : <input type="text" name="namamahasiswa" require="require"> <br> 
        kelas   : <input type="text" name="kelasmahasiswa" require="require"> <br>
        ALamat  : <input type="text" name="alamatmahasiswa" require="require"> <br>
        Jurusan : <input type="text" name="jurusanmahasiswa" require="require"> <br>
        <input type="submit" value="Masuk">
    </form>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Jurusan</td>
        </tr>
        @foreach($data_mahasiswa as $data)
        <tr>
            <td>{{ $data->mahasiswa_id }}</td>
            <td>{{ $data->mahasiswa_nama }}</td>
            <td>{{ $data->mahasiswa_kelas }}</td>
            <td>{{ $data->mahasiswa_alamat }}</td>
            <td>{{ $data->mahasiswa_jurusan }}</td>
        </tr>
        @endforeach
    </table>

@endsection