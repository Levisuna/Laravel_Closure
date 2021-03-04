<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    //
    protected $fillable = ['name', 'kelas', 'jenis_kelamin', 'jurusan', 'alamat'];
}
