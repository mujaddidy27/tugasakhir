<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded;

    public static function boot()
    {
        parent::boot();

        static::created(function ($kode_reg) {
            $kode_reg->nrm .= 'WKL' . date('ym') . '000' . $kode_reg->id;
            $kode_reg->save();
        });
    }

    public function order_item()
    {
        return $this->belongsTo(OrderItem::class);
    }
}