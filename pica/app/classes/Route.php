<?php 

namespace app\Route;

class Route {

    function __construct() {

    }

    public static function get($url = "/", $column = "*", $callback) {
        $callback();
    }

    public static function post () {

    }

    public static function put () {


    }

    public static function patch () {


    }
}