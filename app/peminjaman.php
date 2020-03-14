<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
        //sesuaikan dengan nama tabel yang diubah
        public $table = "peminjaman";
        //jika field PK bukan id tambahkan
        //protected $primaryKey = 'kdbuku';
         protected $guarded = [];
}
