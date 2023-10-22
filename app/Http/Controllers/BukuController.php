<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\BukuModel;//kode ini digunakan untuk memanggil model buku yang sudah dibuat

class BukuController extends Controller
{
    //fungsi index
    public function index(){
        $batas = 5;
        $data_buku = BukuModel::orderBy('harga')->paginate($batas);
        $no = $batas * ($data_buku->currentPage() - 1);
        $jumlahData = BukuModel::count();
        $totalHarga = BukuModel::sum('harga');

        return view('buku.koleksi_buku', compact('data_buku', 'no', 'jumlahData', 'totalHarga'));
    }

    //fungsi create
    public function create(){
        return view('buku.create');
    }

    //fungsi store
    public function store(Request $request){
        $request->validate([
            'judul_buku' => 'required|string|max:250',
            'penulis' => 'required|string|max:250',
            'editor' => 'required|string|max:250',
            'penerbit' => 'required|string|max:250',
            'tanggal_terbit' => 'required|date',
            'isbn' => 'required|string|max:250',
            'jumlah_halaman' => 'required|numeric',
            'jenis_buku' => 'required',
            'harga' => 'required|numeric'
        ]);

        BukuModel::create([
            'judul_buku' => $request->judul,
            'penulis' => $request->penulis,
            'editor' => $request->editor,
            'penerbit' => $request->penerbit,
            'tanggal_terbit' => $request->tgl_terbit,
            'isbn' => $request->isbn,
            'jumlah_halaman' => $request->halaman,
            'jenis_buku' => $request->jenis,
            'harga' => $request->harga
        ]);
        return redirect('/data_perpustakaan')->with('pesan', 'Data Buku Berhasil di Simpan');
    }

    //fungsi edit
    public function edit($id){
        $cariBuku = BukuModel::find($id);
        return view('buku.edit', compact('cariBuku'));
    }

    //fungsi update
    public function update(Request $request, $id){
        $cariBuku = BukuModel::find($id);
        $cariBuku->update([
            'judul_buku' => $request->judul,
            'penulis' => $request->penulis,
            'editor' => $request->editor,
            'penerbit' => $request->penerbit,
            'tanggal_terbit' => $request->tgl_terbit,
            'isbn' => $request->isbn,
            'jumlah_halaman' => $request->halaman,
            'jenis_buku' => $request->jenis,
            'harga' => $request->harga
        ]);
        return redirect('/data_perpustakaan');
    }

    //fungsi delete
    public function destroy($id){
        $cariBuku = BukuModel::find($id);
        $cariBuku->delete();
        return redirect('/data_perpustakaan');
    }

    //fungsi search
    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $data_buku = BukuModel::where('judul_buku','like',"%".$cari."%")
        ->orwhere('penulis','like',"%".$cari."%")
        ->orwhere('editor','like',"%".$cari."%")
        ->orwhere('editor','like',"%".$cari."%")
        ->orwhere('penerbit','like',"%".$cari."%")
        ->orwhere('tanggal_terbit','like',"%".$cari."%")
        ->orwhere('isbn','like',"%".$cari."%")
        ->orwhere('jumlah_halaman','like',"%".$cari."%")
        ->orwhere('jenis_buku','like',"%".$cari."%")
        ->orwhere('harga','like',"%".$cari."%")
        ->paginate($batas);
        $no = $batas * ($data_buku->currentPage() - 1);
        $jumlahData = $data_buku->count();
        $totalHarga = $data_buku->sum('harga');

        return view('buku.search', compact('data_buku', 'no', 'jumlahData', 'totalHarga','cari'));
    }
}
