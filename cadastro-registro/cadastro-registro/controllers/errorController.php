<?php 

class errorController{

    public static function unauthorized() {
        return Direction::render('/errors/notauthorized');
    }


    public static function badrequest() {
        return Direction::render('/errors/badrequest');
    }


    public static function undefined() {
        return Direction::render('/errors/undefined');
    }


    public static function notauthenticate() {
        return Direction::render('/errors/notauthenticate');
    }

}

?>