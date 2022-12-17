<?php

namespace App\Models;
use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformasiTernak extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "informasi ternak";
    protected $fillable = ['nama_penyakit', 'gejala', 'pengobatan', 'keterangan'];
    
    protected $guarded = ['id'];
}
