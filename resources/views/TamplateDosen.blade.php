@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA DOSEN</h1>

    <form action="{{ url('dosen/tambahdosen') }}" method="post">
        {{ csrf_field() }}
        ID Dosen : <input type="text" name="iddosen" require="require"><br>
        Nama     : <input type="text" name="namadosen" require="require"><br>
        Alamat   : <input type="text" name="alamatdosen" require="require"><br>
        Jurusan  : <input type="text" name="jurusandosen" require="require"><br>
        <input type="submit" value="Simpan">
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach($data_dosen as $data)
        <tr>
            <td>{{ $data->dosen_id }}</td>
            <td>{{ $data->dosen_nama }}</td>
            <td>{{ $data->dosen_alamat }}</td>
            <td>{{ $data->dosen_jurusan }}</td>
            <td>
                <a href="{{ url('/dosen/edit/'.$data->dosen_id) }}">Edit</a> |
                <a href="#">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table><br>

    {{ $data_dosen->links() }} <br>

@endsection