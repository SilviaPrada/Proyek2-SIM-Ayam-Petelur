<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BateraiKandang extends Model
{
    use HasFactory;
    protected $table = "baterai_kandang";
    protected $fillable = ['nama_baterai', 'total_ayam'];

    protected $guarded = ['id'];

    public function barisKandang()
    {
      return $this->belongsToMany('App\Models\BarisKandang')->withDefault();
    }
    
}