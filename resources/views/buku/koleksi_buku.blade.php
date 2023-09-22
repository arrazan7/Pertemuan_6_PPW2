@php
    use Carbon\Carbon;
@endphp
<html>
    <table border="1">
        <thead>
            <tr>
                <th>NOMOR</th>
                <th>ID BUKU</th>
                <th>JUDUL BUKU</th>
                <th>PENULIS</th>
                <th>EDITOR</th>
                <th>PENERBIT</th>
                <th>TANGGAL TERBIT</th>
                <th>ISBN</th>
                <th>JUMLAH HALAMAN</th>
                <th>JENIS BUKU</th>
                <th>HARGA</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>TOMBOL HAPUS</th>
                <th>TOMBOL EDIT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $var_buku)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $var_buku->id }}</td>
                    <td>{{ $var_buku->judul_buku }}</td>
                    <td>{{ $var_buku->penulis }}</td>
                    <td>{{ $var_buku->editor }}</td>
                    <td>{{ $var_buku->penerbit }}</td>
                    <td>{{ Carbon::parse($var_buku->tanggal_terbit)->format('d/m/Y') }}</td>
                    <td>{{ $var_buku->isbn }}</td>
                    <td>{{ $var_buku->jumlah_halaman }}</td>
                    <td>{{ $var_buku->jenis_buku }}</td>
                    <td>{{ "Rp ".number_format($var_buku->harga, 2, ',', '.') }}</td>
                    <td>{{ $var_buku->created_at }}</td>
                    <td>{{ $var_buku->updated_at }}</td>
                    <td>
                        <form action="{{ route('menghapus_data', $var_buku->id) }}" method="post">
                            @csrf
                            <button onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('mengedit_data', ['id' => $var_buku->id]) }}" method="get">
                            @csrf
                            <button onClick="return confirm('Yakin mau diganti?')">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Jumlah baris dari tabel di atas adalah {{ $jumlahData }}.</p>
    <p>Jumlah harga seluruh buku dari tabel di atas adalah {{ "Rp ".number_format($totalHarga, 2, ',', '.') }}.</p>
    <p align="right"><a href="{{ route('membuat_data') }}">Tambah Buku</a></p>    
<html>