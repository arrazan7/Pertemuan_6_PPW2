<div class="container">
    <h4>Edit Buku</h4>
    <form method="post" action="{{ route('mengupdate_data', $cariBuku->id) }}" >
        @csrf
        <div>Judul Buku
            <input type="text" name="judul" id="judul" value="{{ $cariBuku->judul_buku }}">
        </div>
        <div>Penulis Buku
            <input type="text" name="penulis" id="penulis" value="{{ $cariBuku->penulis }}">
        </div>
        <div>Editor
            <input type="text" name="editor" id="editor" value="{{ $cariBuku->editor }}">
        </div>
        <div>Penerbit
            <input type="text" name="penerbit" id="penerbit" value="{{ $cariBuku->penerbit }}">
        </div>
        <div>Tanggal Terbit
            <input type="text" name="tgl_terbit" id="tgl_terbit" value="{{ $cariBuku->tanggal_terbit }}">
        </div>
        <div>ISBN
            <input type="text" name="isbn" id="isbn" value="{{ $cariBuku->isbn }}">
        </div>
        <div>Jumlah Halaman
            <input type="text" name="halaman" id="halaman" value="{{ $cariBuku->jumlah_halaman }}">
        </div>
        <div>Jenis Buku
            <input type="text" name="jenis" id="jenis" value="{{ $cariBuku->jenis_buku }}">
        </div>
        <div>Harga
            <input type="text" name="harga" id="harga" value="{{ $cariBuku->harga }}">
        </div>
        
        <div><button type="submit">Simpan</button></div>
        <a href="/data_perpustakaan"> Batal</a>
    </form>
</div>