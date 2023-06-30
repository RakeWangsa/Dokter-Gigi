<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelianObat extends Model
{
    use HasFactory;
    protected $table = 'pembelian_obat';
    protected $fillable = ['id','id_user', 'nama', 'nama_obat', 'total_harga', 'waktu'];
}
