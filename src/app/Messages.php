<?php
namespace Bankas;

class Messages {

    private static $bag; //cia laikysim mesaagesus
    
    public static function init(string $text) {
        self::$bag = $_SESSION['msg'] ?? [];
        unset($_SESSION['msg']);
    }
    public static function add(string $text) {
}
}