<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests;

class MenuController extends Controller
{
    //
    public function tree() {
        $menuModle = new Menu();

        $all = $menuModle->tree();

        print_r($all);

    }


    public function index() {

        
    }
}
