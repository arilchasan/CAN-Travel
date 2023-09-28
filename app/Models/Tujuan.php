<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;

    protected $table = 'tujuans';
    protected $fillable = [
        'kode',
        'kota_asal',
        'kota_tujuan',
    ];

    public function bus()
    {
        return $this->hasMany(Bus::class);
    }
}
