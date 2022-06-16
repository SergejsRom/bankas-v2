<?php

namespace Bankas\Controllers;
use Bankas\App;

class HomeController {


    public function index() {
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $list[] = rand(1000, 9999);
        }
        return App::view('home', [
            'title'=>'Home Bank', 
            'list' => $list]);
    }
}