@extends('layouts.master')

@section('content')
    <div class="container">
        <h4>Tambah Buku</h4>
        @if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form  method="post" action="{{ route('menyimpan_data') }}">
            @csrf
                <div>Judul Buku <input type="text" name="judul"></div>
                <div>Penulis Buku <input type="text" name="penulis"></div>
                <div>Editor <input type="text" name="editor"></div>
                <div>Penerbit <input type="text" name="penerbit"></div>
                <div>Tanggal Terbit <input type="text" name="tgl_terbit" class="date form-control" placeholder="yyyy/mm/dd"></div>
                <div>ISBN <input type="text" name="isbn"></div>
                <div>Jumlah Halaman <input type="text" name="halaman"></div>
                <div>Jenis Buku <input type="text" name="jenis"></div>
                <div>Harga <input type="text" name="harga"></div>
                <div>
                    <button type="submit">Simpan</button>
                    <a href="/data_perpustakaan">Batal</a>
                </div>
        </form>
    </div>
@endsection