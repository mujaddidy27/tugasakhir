<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'kontak',
    ];
    public static function boot()
    {
        parent::boot();

        static::created(function ($mitras) {
            $mitras->kode .= 'FA' . date('ym') . '000' . $mitras->id;
            $mitras->save();
        });
    }
}