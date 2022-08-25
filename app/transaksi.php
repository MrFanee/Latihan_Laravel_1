<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primarykey = 'id_transaksi';
    protected $fillable = ['id_transaksi','id_barang','id_pembeli','tanggal','keterangan'];
    public $timestamps = false;

}
