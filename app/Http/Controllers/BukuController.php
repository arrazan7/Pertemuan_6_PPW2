<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\BukuModel;//kode ini digunakan untuk memanggil model buku yang sudah dibuat

class BukuController extends Controller
{
    //fungsi index
    public function index(){
        $data_buku = BukuModel::all()->sortByDesc('harga');
        $no = 0;
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
        return redirect('/data_perpustakaan');
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
}
