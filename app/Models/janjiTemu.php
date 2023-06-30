<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class janjiTemu extends Model
{
    use HasFactory;
    protected $table = 'janji_temu';
    protected $fillable = ['id','id_user', 'nama', 'nama_dokter', 'waktu'];
}
