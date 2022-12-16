<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PerhitunganRumus extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $table = "perhitungan_rumus";
    protected $fillable = ['rumus_id', 'input1', 'input_2', 'hasil'];

    protected $guarded = ['id'];

    public function Rumus()
    {
      return $this->belongsTo('App\Models\Rumus')->withDefault();
    }
}
