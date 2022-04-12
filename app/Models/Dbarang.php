<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dbarang extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_barang',
        'jbarangs_id',
        'stok'
    ];

    public function jbarangs()
    {
        return $this->belongsTo(Jbarang::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
