@extends('TamplateAdmin')

@section('kontent')
    
    <h1>DATA OFFICE BOY</h1>
    <form action="{{ url('/officeboy/tambah') }}" method="post">
        {{ csrf_field() }}
        ID            : <input type="text" name="id" require="require"><br>
        Nama          : <input type="text" name="nama" require="require"><br>
        Alamat        : <input type="text" name="alamat" require="require"><br>
        Bagian Tempat : <input type="text" name="bagiantempat" require="require"><br>
        <input type="submit" value="Masuk">
    </form><br>

   <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Bagian Tempat</td>
            <td>Aksi</td>
        </tr>
        @foreach($data_ob as $data)
        <tr>
            <td>{{ $data->OB_ID }}</td>
            <td>{{ $data->OB_nama }}</td>
            <td>{{ $data->OB_alamat }}</td>
            <td>{{ $data->OB_bagiantempat }}</td>
            <td>
                <a href="{{ url('/officeboy/edit'.$data->OB_ID) }}">Edit</a> |
                <a href="">Hapus</a>
            </td>
        </tr>
        @endforeach
   </table>

@endsection