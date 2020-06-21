<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ufv extends Model
{
    use SoftDeletes;
    protected $table = 'ufvs';
    protected $primaryKey = 'idufv';
    protected $fillable = [
        'ufv_fecha',
        'ufv_valor',
        'dolar_valor',
        'euro_valor'
    ];

    protected $dates=['deleted_at'];
}
