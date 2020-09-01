@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA TU</h1>

    <form action="{{ action('ControllerAdmin@prosesinputTU') }}" method="post">
        Nama    = <input type="text" name="nama"><br>
        Bagian  = <input type="text" name="bagian"><br>
        Jabatan = <input type="text" name="jabatan"><br>
        <input type="submit" value="Masuk"> 
    </form>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Bagian</td>
            <td>Jabatan</td>
        </tr>
        @foreach($data_tu as $data)
        <tr>
            <td>{{ $data->TU_id }}</td>
            <td>{{ $data->TU_nama }}</td>
            <td>{{ $data->TU_bagian }}</td>
            <td>{{ $data->TU_jabatan }}</td>
        </tr>
        @endforeach
    </table>
@endsection