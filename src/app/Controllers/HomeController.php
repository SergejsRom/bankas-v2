<?php

namespace Bankas\Controllers;
use Bankas\App;
use Bankas\Messages as M;

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
        return App::view('form', ['messages' => M::get()]);
    }

    public function doForm() {
        M::add('Puiku', 'alert');
        M::add($_POST['alabama'], 'success'); // duomenys is formos perduodami i message
        return App::redirect('forma');
        
    }
}