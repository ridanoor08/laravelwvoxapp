<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed uploads
 */
class Photo extends Model
{
    //
    protected $primaryKey = "photo_id";

    protected $uploads = "/images/";

    protected $fillable = [
        'file'
    ];

    public function getFileAttribute($photo){
        return $this-> uploads.$photo;

    }

}
