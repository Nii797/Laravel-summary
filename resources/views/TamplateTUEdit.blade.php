@extends('TamplateAdmin')

@section('kontent')

    <h1>EDIT DATA TU</h1>

    @foreach($data_tu as $data)
    <form action="{{ url('/tatausaha/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="idtu" value="{{ $data->TU_id }}"><br>
        Nama    : <input type="text" name="namatu" require="require" value="{{ $data->TU_nama }}"><br>
        Bagian  : <input type="text" name="bagiantu" require="require" value="{{ $data->TU_bagian }}"><br>
        Jabatan : <input type="text" name="jabatantu" require="require" value="{{ $data->TU_jabatan }}"><br>
        <input type="submit" value="Simpan">     
    </form>
    @endforeach

@endsection