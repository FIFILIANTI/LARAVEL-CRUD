<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table= 'karyawan';
    protected $fillable=['nik','nama','alamat','jabatan','handphone'];
}
