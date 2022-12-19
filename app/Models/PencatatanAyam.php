<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PencatatanAyam extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    protected $table = "pencatatan_ayam";
    protected $fillable = ['waktu','kolom_id', 'produktifitas', 'kondisi', 'jumlah_telur'];

    protected $guarded = ['id'];

    public function kolomAyam()
    {
      return $this->belongsToMany('App\Models\KolomAyam')->withDefault();
    }
}