<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table        = 'order_details';
    protected $fillable     = ['id_produk', 'harga', 'jumlah', 'subtotal', 'id_pesan'];
    protected $primaryKey   = 'id_detail';

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'id_produk');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'id_pesan');
    }
}
