<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';


    public function likes()
    {
        return $this->morphMany('App\Like', 'likeable');
    }
}
