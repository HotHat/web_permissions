<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MyMenu {
    public $url;
    public $title;
    public $subMenu;

    public function __construct($url, $title, $subMenu) {
        $this->url = $url;
        $this->title = $title;
        $this->subMenu = $subMenu;
    }

    public function addSubMenu($menu) {
        $this->subMenu[] = $menu;
        return true;
    }

    public function delSubMenu($id) {
        if ($id < count($this->subMenu)) {
            $this->subMenu[$id];
            return true;
        } else {
            return false;
        }
    }

}

class Menu extends Model
{
    //
    protected $table = 'menus';

    protected $allMenus;


    public function tree() {

        $all = $this->all()->toArray();

        $root = $this->makeMyMenu($all);

        return $root;
    }

    private function makeMyMenu($menus) {
        $newMenu = [];
        foreach ($menus as $menu) {
            $newMenu[$menu['id']] = new MyMenu($menu['url'], $menu['title'], []);
        }

        $root = new MyMenu('', '', []);

        foreach ($menus as  $menu) {
            if ($menu['parent'] == 0) {
                $id = $menu['id'];
                $root->subMenu[] = $newMenu[$id];
            } else {
                $id = $menu['id'];
                $fid = $menu['parent'];
                $father = $newMenu[$fid];
                $father->subMenu[] = $newMenu[$id];
            }

        }

        return $root;
    }


}
