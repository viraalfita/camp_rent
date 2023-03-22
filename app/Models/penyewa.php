<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'durasi', 'tgl_sewa', 'tgl_kembali', 'deskripsi'];
    protected $table = 'penyewa';

    public function PenyewaDetail()
    {
        return $this->hasMany('App\Models\penyewa_detail', 'id_penyewa', 'id');
    }
}
