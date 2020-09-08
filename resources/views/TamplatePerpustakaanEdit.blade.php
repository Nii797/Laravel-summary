@extends('TamplateAdmin')

@section('kontent')

    @foreach($data_perpustakaan as $dataperpus)
    <form action="{{ url('/perpustakaan/update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="nomorbuku" value="{{ $dataperpus->nomor_buku }}"><br>
        Judul Buku      : <input type="text" name="judulbuku" require="require" value="{{ $dataperpus->judul_buku }}"><br>
        NPM Peminjam    : <input type="text" name="npmpeminjam"  require="require" value="{{ $dataperpus->npm_peminjam }}"><br>
        Nama Peminjam   : <input type="text" name="namapeminjam"  require="require" value="{{ $dataperpus->nama_peminjam }}"><br>
        Tanggal Pinjam  : <input type="text" name="tglpinjam"  require="require" value="{{ $dataperpus->tgl_pinjam }}"><br>
        Tanggal Kembali : <input type="text" name="tglkembali" require="require" value="{{ $dataperpus->tgl_kembali }}"><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach

@endsection