<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = ['name_kategori'];

    public function berita()
    {
        return $this->belongsTo(Kategori::class);
    }
}
