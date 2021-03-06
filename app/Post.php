<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    //

    protected $fillable = [

        'title', 'description', 'image', 'user_id'
    ];

    public function user(){

        return $this->belongsTo('App\User', 'user_id');
    }
}
