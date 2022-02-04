<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class camera extends Model
{
    //
    //protected $table='cameras';
    //protected $primarykey='id';
    protected $fillable = ['id','id_camera','jenis','merk','tipe','harga'];
}
