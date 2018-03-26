<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public $fillable = ['foto','nama', 'deskripsi', 'harga', 'rute', 'hotel', 'kamar', 'pesawat', 'berangkat', 'kembali', 'user', 'seat'];
}
