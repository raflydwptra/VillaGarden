<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Villa;

class VillaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Villa::create([
            'name' => 'Villa Melati Garden',
            'description' => 'Villa Melati Garden terletak di Perumahan Taman Melati, jl. Pasir Impun-Sukamiskin, Bandung, merupakan perumahan asri yang terletak diperbukitan, dengan udara bersih dan sejuk. Letaknya berada dipusat wisata populer kota Bandung dan tidak terlalu jauh dari kota Lembang, membuat lokasi Villa Melati Garden menjadi peristirahatan yang sangat menarik dan strategis untuk dikunjungi wisatawan maupun pebisnis. Villa Melati Garden memiliki konsep menarik, dengan design Villa Kayu yang unik, yang dirancang menjadi sebuah penginapan berkonsep Family Guest House yang nyaman dan private bagi anda bersama keluarga.',
            'price' => 40000,
            'capacity' => 20,
            'image' => 'villa.jpg'
        ]);
    }
}
