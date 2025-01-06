<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run()
    {
        Home::create([
            'name' => env('APP_NAME'),
            'judul' => 'Temukan Hijab Terbaikmu di HijabChinc',
            'deskripsi' => 'HijabChinc menyediakan koleksi hijab berkualitas tinggi yang trendi dan nyaman, cocok untuk berbagai kesempatan.',
            'konten_1' => 'Hijab Premium dengan Desain Modern.',
            'konten_2' => 'Kualitas Terbaik untuk Hijab Anda',
            'konten_3' => 'Pilihan Warna Beragam',
            'deskripsi_konten_1' => 'Kunjungi koleksi terbaru kami dengan berbagai pilihan warna dan desain yang sesuai dengan gaya Anda.',
            'deskripsi_konten_2' => 'Material hijab yang lembut, tahan lama, dan nyaman digunakan sepanjang hari.',
            'deskripsi_konten_3' => 'HijabChinc menyediakan berbagai warna hijab untuk mendukung penampilan Anda setiap hari.',
            'cta' => 'HijabChinc: Inspirasi Gaya Anda',
            'cta_deskripsi' => 'Kami menyediakan hijab berkualitas tinggi dengan desain modern dan beragam pilihan warna untuk mendukung gaya Anda setiap hari. HijabChinc berkomitmen memberikan pengalaman berbelanja yang menyenangkan dengan produk hijab terbaik dan harga yang terjangkau.',
            'cta_foto_1' => 'https://i.pinimg.com/474x/d6/5c/65/d65c65a6c3646c05448669acabd3fb3c.jpg',
            'cta_foto_2' => 'https://mitramulia.com/kcfinder/upload/files/Busana%20Muslim/ootd%20hijab%20cantik%20untuk%20liburan%20akhir%20pekan%204.jpg',
            'about_us' => "Jual berbagai model hijab kekinian dengan harga terjangkau. Tersedia fitur virtual fitting room untuk mencoba hijab secara virtual, serta program loyalty points untuk pelanggan setia. Target audiens: remaja putri dan wanita muda yang menyukai fashion.",
        ]);
    }
}
