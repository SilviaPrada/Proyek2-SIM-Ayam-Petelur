<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnakKandang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['no_ktp', 'nama_anak_kandang', 'baterai_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto_anak_kandang'];

    public function bateraiKandang()
    {
        return $this->belongsTo('App\Models\BateraiKandang')->withDefault();
    }

    protected $table = 'anak_kandang';
}
