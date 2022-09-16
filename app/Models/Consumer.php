<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    protected $table        = 'consumers';
    protected $fillable     = ['nama', 'email', 'password', 'alamat', 'no_telp'];
    protected $primaryKey   = 'id_konsumen';

    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}
