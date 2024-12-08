<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buku');
            $table->foreignIdFor(\App\Models\Kategori::class)->constrained('kategoris');
            $table->foreignIdFor(\App\Models\Pengarang::class)->constrained('pengarangs');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
