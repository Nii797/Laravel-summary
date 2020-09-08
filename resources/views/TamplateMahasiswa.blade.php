@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA MAHASISWA</h1>

    <form action="{{ url('/mahasiswa/tambahmahasiswa') }}" method="post">
        {{ csrf_field() }}
        ID      : <input type="text" name="idmahasiswa" require="require"><br>
        Nama    : <input type="text" name="namamahasiswa" require="require"> <br> 
        kelas   : <input type="text" name="kelasmahasiswa" require="require"> <br>
        ALamat  : <input type="text" name="alamatmahasiswa" require="require"> <br>
        Jurusan : <input type="text" name="jurusanmahasiswa" require="require"> <br>
        <input type="submit" value="Masuk">
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach($data_mahasiswa as $data)
        <tr>
            <td>{{ $data->mahasiswa_id }}</td>
            <td>{{ $data->mahasiswa_nama }}</td>
            <td>{{ $data->mahasiswa_kelas }}</td>
            <td>{{ $data->mahasiswa_alamat }}</td>
            <td>{{ $data->mahasiswa_jurusan }}</td>
            <td>
                <a href="{{ url('/mahasiswa/edit/'.$data->mahasiswa_id) }}">Edit</a> | 
                <a href="#">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection