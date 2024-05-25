<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','harga','stok','id_merek'];
    protected $visible = ['nama_barang','harga','stok','id_merek'];

    public function Barang (){
        return $this->hasMany(Barang::class);
    }
}
