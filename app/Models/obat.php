<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'obat';
    protected $fillable = ['id','nama_obat', 'harga_obat'];
}
