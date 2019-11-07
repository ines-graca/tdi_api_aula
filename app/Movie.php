<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{

    use SoftDeletes;

    protected $fillable = ['title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'];


   function director() {

        return $this->belongsTo('App\Director', 'director_id', 'id');
    }



    function country() {

        return $this->belongsTo('App\Country', 'country_id', 'id');
    }



    function category() {

        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    //
}
