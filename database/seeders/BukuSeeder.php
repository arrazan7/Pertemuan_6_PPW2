<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BukuModel;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        // $variabel = new BukuModel();
        // $variabel->id = '1';
        // $variabel->judul_buku = 'Buku Ke-1';
        // $variabel->penulis = 'Andika';
        // $variabel->harga = '120000';
        // $variabel->tgl_terbit = '12/12/12';
        // $variabel->save();
        
        BukuModel::factory(20)->create();
    }
}
