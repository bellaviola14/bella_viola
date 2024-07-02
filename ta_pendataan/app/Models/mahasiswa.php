<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
	
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'jenis_kelamin',
        'ttl',
        'no_telp',
        'email',
        'tahun_masuk',
        'alamat',
        'foto',
        'data_lainnya',
        'jalur_masuk',
        'id_kelas',
    ];		
	
    public function foreign_kelas()
    {
        return $this->belongsTo(kelas_mahasiswa::class, 'id_kelas');
    }  	
	
}
