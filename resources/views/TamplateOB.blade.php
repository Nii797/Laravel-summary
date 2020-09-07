@extends('TamplateAdmin')

@section('kontent')
    
    <h1>DATA OFFICE BOY</h1>

    <form action="#" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        ID            : <input type="text" name="id" require="require"><br>
        Nama          : <input type="text" name="nama" require="require"><br>
        Bagian Tempat : <input type="text" name="bagiantempat" require="require"><br>
        Alamat        : <input type="text" name="alamat" require="require"><br>
        <input type="submit" value="Masuk">
    </form><br>

   <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Alamat</td>
        </tr>
   </table>

@endsection