<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa_detail extends Model
{
    use HasFactory;
    protected $fillable = ['id_barang', 'id_penyewa'];
    protected $table = 'penyewa_detail';
}
