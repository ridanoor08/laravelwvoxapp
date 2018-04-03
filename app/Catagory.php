<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    //
    protected $primaryKey = 'catagory_id';

    protected $fillable = [
        'catagory_name'
    ];
}
