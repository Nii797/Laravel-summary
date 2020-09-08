@extends('TamplateAdmin')

@section('kontent')
    
    <h1>EDIT DATA DEKAN</h1>

    @foreach($data_dekan as $data)
    <form action="{{ url('/dekan/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="dekanid" value="{{ $data->dekan_id }}"><br>
        Nama          : <input type="text" name="namadekan" required="required" value="{{ $data->dekan_nama }}"><br>
        Jabatan       : <input type="text" name="jabatan" required="required" value="{{ $data->dekan_jabatan }}"><br>
        Dekan Jurusan : <input type="text" name="dekanjurusan" required="required" value="{{ $data->dekan_jurusan }}"><br>
        Umur          : <input type="text" name="umur" required="required" value="{{ $data->dekan_umur }}"><br>
        ALamat        : <input type="text" name="alamat" required="required" value="{{ $data->dekan_alamat }}"><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach

@endsection