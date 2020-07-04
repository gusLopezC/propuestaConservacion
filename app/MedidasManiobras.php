<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedidasManiobras extends Model
{
    //
    protected $fillable = [
        'tramos',
        'metros',
        'maniobra_id'
    ];
}
