@extends('TamplateAdmin')

@section('kontent')

    @foreach($data_ob as $data)
    <form action="{{ url('/officeboy/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="idob" require="require" value="{{ $data->OB_ID }}"><br>
        Nama   : <input type="text" name="namaob" require="require" value="{{ $data->OB_nama }}"><br>
        Alamat : <input type="text" name="alamatob" require="require" value="{{ $data->OB_alamat }}"><br>
        Bagian dan Tampat : <input type="text" name="bagiantempatob" require="require" value="{{ $data->OB_bagiantempat }}"><br> 
        <input type="submit" value="Simpan">
    </form>
    @endforeach

@endsection