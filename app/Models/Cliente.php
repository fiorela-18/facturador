<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded =[];

    protected $fillable = [
    'nombre',
    'pri_ape',
    'seg_ape',
    'doc_tip',
    'docu_num',
    'telefono',
    'direccion'
];
}
