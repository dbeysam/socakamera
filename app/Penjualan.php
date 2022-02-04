<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['id','id_camera','customer','jumlah','total'];
    public function camera(){
        return $this->belongsTo('App\camera', 'id_camera','id');
    }
}

