<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/22
 * Time: 0:18
 */

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use App\Post;

class LikeController extends Controller
{

    public function fuck() {





        $s = Like::paginate(2);


        var_dump($s->toArray());
        echo $s->render();

        $likeModle = Like::all();

        foreach ($likeModle as $like) {
            $mode = $like->likeable();

            var_dump($mode->get()->toArray());

        }


    }
}