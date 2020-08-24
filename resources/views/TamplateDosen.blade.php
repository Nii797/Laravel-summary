@extends('TamplateAdmin')

@section('kontent')
    <h1>DATA DOSEN</h1>
    Nama        : {{$nama}} <br>
    Mata Kuliah : {{$matkul}} <br>
    ALamat      : {{$alamat}} <br>
    Jurusan     : {{$jurusan}} <br><br>

    <form action="{{ action('ControllerAdmin@prosesinputdosen') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama    : <input type="text" name="nama"><br>
        ALamat  : <input type="text" name="alamat"><br>
        <input type="submit" value="Simpan">
    </form>
@endsection