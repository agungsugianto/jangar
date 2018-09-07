<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['kategori'];

    public function barang()
    {
        return $this->hasMany('App\barang', 'kategori_id');
    }
    
}
