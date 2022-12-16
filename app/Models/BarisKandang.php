<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarisKandang extends Model
{
    use HasFactory;
    protected $table = "baris_ayam";
    protected $fillable = ['baterai_id','nama_baris','jumlah_kolom_ayam'];

    protected $guarded = ['id'];

    public function bateraiKandang()
    {
      return $this->belongsTo('App\Models\BateraiKandang')->withDefault();
    }

    public function kolomKandang()
    {
      return $this->belongsToMany('App\Models\KolomAyam')->withDefault();
    }
}
