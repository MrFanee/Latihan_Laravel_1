<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suplier extends Model
{
    protected $table = 'suplier';
    protected $primarykey = 'id_suplier';
    protected $fillable = ['id_suplier','nama_suplier','no_tlp','alamat'];
    public $timestamps = false;

}
