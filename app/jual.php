<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jual extends Model
{
    protected $table = 'barang';
    protected $primarykey = 'id_barang';
    protected $foreignkey = 'id_suplier';
    protected $fillable = ['id_barang','nama_barang','harga','stok','id_suplier'];
    public $timestamps = false;

}
