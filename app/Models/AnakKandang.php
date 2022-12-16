<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnakKandang extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    protected $table = "anak_kandang";
    protected $fillable = ['no_ktp', 'nama_anak_kandang','jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto_anak_kadang', 'baterai_id'];

    public function bateraiKandang()
    {
        return $this->belongsToMany('App\Model\BateraiKandang')->withDefault();
    }

}
