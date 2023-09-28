<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'buses';
    protected $fillable = [
        'nama_bus',
        'tujuan_id',
        'harga',
        'jumlah_kursi',
    ];

    public function tujuan()
    {
        return $this->belongsTo(Tujuan::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
