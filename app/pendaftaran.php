<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $table = 'pendaftarans';
    protected $fillable = [
        'nama',
        'nik',
        'no',
    ];
}
