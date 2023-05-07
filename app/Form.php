<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';

    protected $guarded = [
        'id','created_at','updated_at',
    ];
    protected $fillable = [
        'nama',
        'nik',
        'no',
    ];
}
