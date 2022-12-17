<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BateraiKandang extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = "baterai_kandang";
  protected $fillable = ['nama_baterai', 'total_ayam'];
  
  protected $guarded = ['id'];    
}
