@extends('TamplateAdmin')

@section('kontent')

    <h1>DATA PERPUSTAKAAN</h1>
    
    <form action="{{ url('/perpustakaan/tambah') }}" method="post">
        {{ csrf_field() }}
        Nomor Buku      : <input type="text" name="nomorbuku" require="require"><br>
        Judul Buku      : <input type="text" name="judulbuku" require="require"><br>
        NPM Peminjam    : <input type="text" name="npmpeminjam" require="require"><br>
        Nama Peminjam   : <input type="text" name="namapeminjam" require="require"><br>
        Tanggal Pinjam  : <input type="text" name="tanggalpinjam" require="require"><br>
        Tanggal Kembali : <input type="text" name="tanggalkembali" require="require"><br>
        <input type="submit" value="MasuK">
    </form><br>

    <table border="1">
        <tr>
            <th>Nomor Buku</th> 
            <th>Judul Buku</th>
            <th>NPM Peminjam</th>
            <th>Nama Peminjam</th>      
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        @foreach($data_perpustakaan as $data)
        <tr>
            <td>{{ $data->nomor_buku }}</td>
            <td>{{ $data->judul_buku }}</td>
            <td>{{ $data->npm_peminjam }}</td>
            <td>{{ $data->nama_peminjam }}</td>
            <td>{{ $data->tgl_pinjam }}</td>
            <td>{{ $data->tgl_kembali }}</td> 
            <td>
                <a href="{{ url('/perpustakaan/edit/'.$data->nomor_buku) }}">Edit</a> |
                <a href="http://">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table> <br>
    {{ $data_perpustakaan->links() }}

@endsection