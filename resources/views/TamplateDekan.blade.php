@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA DEKAN</h1>
    <form action="{{ action('ControllerAdmin@indexdekan') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama          : <input type="text" name="namadekan"><br>
        Jabatan       : <input type="text" name="jabatan"><br>
        Dekan Jurusan : <input type="text" name="dekanjurusan"><br>
        Umur          : <input type="text" name="umur"><br>
        ALamat        : <input type="text" name="alamat"><br>
        <input type="submit" value="Simpan">
    </form>
@endsection