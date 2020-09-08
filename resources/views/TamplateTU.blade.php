@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA TU</h1>

    <form action="#" method="post">
        ID TU      : <input type="text" name="idtu" require="require"><br>
        Nama TU    : <input type="text" name="namatu" require="require"><br>
        Bagian TU  : <input type="text" name="bagiantu" require="require"><br>
        Jabatan TU : <input type="text" name="jabatantu" require="require"><br>
        <input type="submit" value="Masuk"> 
    </form><br><br>

    <table border="1">
        <tr>
            <th>ID TU</th>
            <th>Nama TU</th>
            <th>Bagian TU</th>
            <th>Jabatan TU</th>
            <th>Aksi</th>
        </tr>
        @foreach($data_tu as $data)
        <tr>
            <td>{{ $data->TU_id }}</td>
            <td>{{ $data->TU_nama }}</td>
            <td>{{ $data->TU_bagian }}</td>
            <td>{{ $data->TU_jabatan }}</td>
            <td>
                <a href="{{ url('/tatausaha/edit/'.$data->TU_id) }}">Edit</a> |
                <a href="http://">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection