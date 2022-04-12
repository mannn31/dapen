<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'tanggal_transaksi',
        'dbarangs_id',
        'jumlah_terjual'
    ];
   
    public function dbarangs()
    {
        return $this->belongsTo(Dbarang::class);
    }
}
