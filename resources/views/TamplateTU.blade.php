@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA TU</h1>

    <form action="{{ action('ControllerAdmin@prosesinputTU') }}" method="post">
        Nama    = <input type="text" name="nama"><br>
        Bagian  = <input type="text" name="bagian"><br>
        Jabatan = <input type="text" name="jabatan"><br>
        <input type="submit" value="Masuk"> 
    </form>
    
@endsection