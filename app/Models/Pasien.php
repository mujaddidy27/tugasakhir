<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tgl_lahir',
        'j_kelamin',
        'kategori_id',
        'no_kartu',
        'no_hp',
        'alamat',
        'user_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
