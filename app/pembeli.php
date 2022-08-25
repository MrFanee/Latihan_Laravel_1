<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $table = 'pembeli';
    protected $primarykey = 'id_pembeli';
    protected $fillable = ['id_pembeli','nama_pembeli','jk','no_tlp','alamat'];
    public $timestamps = false;

}
