<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KolomAyam extends Model
{
    use HasFactory;
    protected $table = "kolom_ayam";
    protected $fillable = ['kode_baris', 'nama_kolom_ayam'];

    protected $guarded = ['id'];

    public function barisKandang()
    {
      return $this->belongsTo('App\Models\BarisKandang')->withDefault();
    }
}
