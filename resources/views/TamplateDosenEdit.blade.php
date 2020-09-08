@extends('TamplateAdmin')

@section('kontent')

    <h1>EDIT DATA DOSEN</h1>

    @foreach($data_dosen as $data)
    <form action="{{ url('/dosen/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="iddosen" required="required" value="{{ $data->dosen_id }}">
        Nama Dosen  : <input type="text" name="namadosen" required="required" value="{{ $data->dosen_nama }}"><br> 
        Alamat      : <input type="text" name="alamatdosen" required="required" value="{{ $data->dosen_alamat }}"><br>
        Jurusan     : <input type="text" name="jurusandosen" required="required" value="{{ $data->dosen_jurusan }}"><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach

@endsection