<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected  $table = 'posts';

    public function likes()
    {
        return $this->morphMany('App\Like', 'likeable');
    }
}
