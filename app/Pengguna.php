<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "tb_user";
 
    protected $fillable = ['nama','email', 'no_tlp', 'username', 'pass', 'alamat'];

    public $timestamps = false;
}