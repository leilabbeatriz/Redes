<?php
class Http{
    
    public static function isGet($method)
    {
        if ($method != 'GET') {
            return Direction::render('/errors/badrequest');
        }
    }
    
    public static function isPost($method)
    {
        if ($method != 'POST') {
            return Direction::render('/errors/badrequest');
        }
    }
}    
