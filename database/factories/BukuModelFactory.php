<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuModelFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    /*
      
      @return array<string,mixed
    */
    public function definition(): array
    {
        return [
            'judul_buku' => $this->faker->realText($maxNbChars = 50,5),
            'penulis' => $this->faker->name,
            'editor' => 'siapa aja boleh',
            'penerbit' => $this->faker->company,
            'tanggal_terbit' => $this->faker->dateTimeBetween($startDate = '1990-01-01', $endDate = '2023-12-31'),
            'isbn' => $this->faker->numerify('##-####-#-###'),
            'jumlah_halaman' => $this->faker->numberBetween(100,2000),
            'jenis_buku' => $this->faker->randomElement(['Fiksi', 'Non-Fiksi']),
            'harga' => $this->faker->numberBetween($min = 100000, $max = 2000000),
        ];
    }
}
