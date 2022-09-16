<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table        = 'payments';
    protected $fillable     = ['jumlah', 'tgl_bayar', 'bukti_bayar', 'id_pesan'];
    protected $primaryKey   = 'id_bayar';

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'id_pesan');
    }
}
