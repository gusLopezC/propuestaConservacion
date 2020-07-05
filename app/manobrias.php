<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manobrias extends Model
{

    protected $fillable = [
        'nombreManiobra', 'tramos', 'metros', 'estatus', 'observaciones', 'user_id', 'created_at'
    ];
    //

    public function getPhotos()
    {
        return $this->hasMany('App\PhotosManiobra', 'maniobra_id');
    }
}
