<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //sesuaikan dengan nama tabel yang diubah
    public $table = "buku";
    //jika field PK bukan id tambahkan
    //protected $primaryKey = 'kdbuku';
     protected $guarded = [];
}
