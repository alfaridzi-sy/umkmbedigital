<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table        = 'orders';
    protected $fillable     = ['kd_pesan', 'tgl_pesan', 'alamat_kirim', 'total', 'status_pesan', 'id_konsumen'];
    protected $primaryKey   = 'id_pesan';

    public function consumer()
    {
        return $this->belongsTo('App\Models\Consumer', 'id_konsumen');
    }

    public function order_detail()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function payment()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
