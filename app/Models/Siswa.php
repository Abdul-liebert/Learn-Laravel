<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = ['nama_siswa','kelas_siswa','domisili_siswa'];
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}

