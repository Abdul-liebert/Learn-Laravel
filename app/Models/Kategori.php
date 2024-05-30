<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $fillable = ['nama_kategori'];

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
}
