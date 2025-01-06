<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        Profile::create([
            'name' => 'Yuliana Nur Ferantika',
            'nim' => 'SSI202303486',
            'class' => 'C3.4Sistem Informasi',
            'univ' => 'STMIK Widya Utama 2023/2024',
            'email' => 'tefamail89@gmail.com',
            'photo' => 'https://down-id.img.susercontent.com/file/id-11134207-7r992-lv1kxyxqphjc2f',
        ]);
    }
}
