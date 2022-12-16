<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumus extends Model
{
    use HasFactory;
    protected $table = "rumus";
    protected $fillable = ['nama', 'keterangan'];

    protected $guarded = ['id'];

    public function perhitunganRumus()
    {
      return $this->belongsToMany('App\Models\PerhitunganRumus')->withDefault();
    }
}
