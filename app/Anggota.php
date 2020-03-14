<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //sesuaikan dengan nama tabel yang diubah
    public $table = "anggota";
    //jika field PK bukan id tambahkan
    //protected $primaryKey = 'kdbuku';
     protected $guarded = [];
}
