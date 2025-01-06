<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paket;

class PaketSeeder extends Seeder
{
    public function run()
    {
        Paket::create([
            'name' => 'Paket Basic',
            'price' => '49,000',
            'benefit_1' => '5 Hijab Premium',
            'benefit_2' => 'Panduan Gaya Hijab',
        ]);

        Paket::create([
            'name' => 'Paket Standar',
            'price' => '99,000',
            'benefit_1' => '10 Hijab Premium',
            'benefit_2' => 'Gratis Ongkir',
        ]);

        Paket::create([
            'name' => 'Paket Premium',
            'price' => '149,000',
            'benefit_1' => '20 Hijab Premium',
            'benefit_2' => 'Akses Eksklusif Koleksi Baru',
        ]);

        
    }
}
