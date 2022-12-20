<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnakKandang extends Model
{
    use HasFactory;

    protected $fillable = ['no_ktp', 'nama_anak_kandang', 'baterai_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto_anak_kandang'];

    protected $guarded = ['id'];

    protected $table = 'anak_kandang';
}