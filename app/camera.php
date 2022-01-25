<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class camera extends Model
{
    //
    //protected $table='cameras';
    //protected $primarykey='id';
    protected $fillable = ['id','jenis','merk','tipe','harga'];
}
