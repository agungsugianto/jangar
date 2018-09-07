<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $fillable = ['nama_barang','kategori_id','harga','foto'];
    public function kategori()
    {
        return $this->belongsTo('App\kategori', 'kategori_id');
    }
    
}