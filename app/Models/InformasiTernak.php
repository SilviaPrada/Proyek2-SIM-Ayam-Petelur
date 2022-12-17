<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiTernak extends Model
{
    use HasFactory;

    protected $table = "informasi_ternak";
    protected $fillable = ['nama_penyakit', 'gejala', 'pengobatan', 'keterangan'];
    
    protected $guarded = ['id'];
}
