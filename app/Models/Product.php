<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table        = 'products';
    protected $fillable     = ['deksprsi_produk', 'stok', 'harga', 'foto', 'id_kategori', 'id_cluster'];
    protected $primaryKey   = 'id_produk';

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id_kategori');
    }

    public function cluster()
    {
        return $this->belongsTo('App\Models\Cluster', 'id_anggota');
    }

    public function order_detail()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
