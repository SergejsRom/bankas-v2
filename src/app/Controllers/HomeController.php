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

    public function form() {
        return App::view('form');
    }

    public function doForm() {
        return App::redirect('forma');
        
    }
}