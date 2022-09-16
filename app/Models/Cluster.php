<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;

    protected $table        = 'clusters';
    protected $fillable     = ['penanggung_jawab', 'nama', 'alamat', 'id_admin'];
    protected $primaryKey   = 'id_cluster';

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'id_admin');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
