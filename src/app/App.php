<?php
namespace Bankas;
use Bankas\Controllers\HomeController;


class App {

    public static function start() {

        $uri = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($uri);
        self::route($uri);

    }

    public static function view(string $name, array $data = []) {
        extract($data);
        return require __DIR__ .' /../views/'.$name.'.php';

    }

    private static function route(array $uri) {

        if (count($uri) == 3 && $uri[2] === '') {
            return (new HomeController)->index();
        
        } else {
            echo 'kitka';
        }

    }
}