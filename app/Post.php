<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'user_id', 'catagory_id', 'photo_id', 'post_title', 'post_body',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->belongsTo('App\Photo', 'photo_id');
    }

    public function catagory(){
        return $this->belongsTo('App\Catagory', 'catagory_id');
    }

}
