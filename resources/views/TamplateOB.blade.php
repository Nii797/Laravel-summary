@extends('TamplateAdmin')

@section('kontent')
    
    <h1>DATA OFFICE BOY</h1>

    <form action="{{action('ControllerAdmin@prosesinputOB')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        ID      : <input type="text" name="id"><br>
        Nama    : <input type="text" name="nama"><br>
        Alamat  : <input type="text" name="alamat"><br>
        <input type="submit" value="Masuk">
    </form>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Alamat</td>
        </tr>
        @foreach($data_OB as $data)
        <tr>
            <td>{{ $data->OB_ID }}</td>
            <td>{{ $data->OB_nama }}</td>
            <td>{{ $data->OB_alamat }}</td>
        </tr>
        @endforeach
    </table>

@endsection