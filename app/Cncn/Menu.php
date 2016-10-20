<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/17
 * Time: 20:40
 */
class Menu
{
    private $url;       // string
    private $title;     // string
    private $subMenus;  // array


    public function __construct($url, $title, $subMenus) {

        $this->url = $url;
        $this->title = $title;
        $this->subMenus = $subMenus;
    }

    public function subMenus() {
        return $this->subMenus;
    }

}