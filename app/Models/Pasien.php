<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nrm',
        'nama',
        'tgl_lahir',
        'j_kelamin',
        'nik',
        'no_hp',
        'alamat',
        'user_id',
    ];
    public static function boot()
    {
        parent::boot();

        static::created(function ($pasiens) {
            $pasiens->nrm .= 'WK' . date('ym') . '000' . $pasiens->id;
            $pasiens->save();
        });
    }
}