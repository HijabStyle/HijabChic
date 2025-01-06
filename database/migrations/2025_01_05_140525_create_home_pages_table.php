<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('judul');
            $table->text('deskripsi');
            $table->text('konten_1');
            $table->text('konten_2');
            $table->text('konten_3');
            $table->text('deskripsi_konten_1');
            $table->text('deskripsi_konten_2');
            $table->text('deskripsi_konten_3');
            $table->text('cta');
            $table->text('cta_deskripsi');
            $table->text('cta_foto_1');
            $table->text('cta_foto_2');
            $table->text('about_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
