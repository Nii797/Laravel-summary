@extends('TamplateAdmin')

@section('kontent')

    @foreach($data_mahasiswa as $datamhs)
    <form action="{{ url('/mahasiswa/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="idmahasiswa" value="{{ $datamhs->mahasiswa_id }}">
        Nama Mahasiswa    : <input type="text" name="namamahasiswa" require="require" value="{{ $datamhs->mahasiswa_nama }}"><br>
        Kelas Mahasiswa   : <input type="text" name="kelasmahasiswa" require="require" value="{{ $datamhs->mahasiswa_kelas }}"><br>
        Alamat Mahasiswa  : <input type="text" name="alamatmahasiswa" require="require" value="{{ $datamhs->mahasiswa_alamat }}"><br>
        Jurusan Mahasiswa : <input type="text" name="jurusanmahasiswa" require="require" value="{{ $datamhs->mahasiswa_jurusan }}"><br>
        <input type="submit" value="Simpan"> 
    </form>
    @endforeach

@endsection