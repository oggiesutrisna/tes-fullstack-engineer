<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_buku',
        'kategori_id',
        'pengarang_id',
        'tahun',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function pengarang(): BelongsTo
    {
        return $this->belongsTo(Pengarang::class);
    }
}
