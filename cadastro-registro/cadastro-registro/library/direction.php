<?php
class Direction{
    
    public static function render($route)
    {
        return include_once __DIR__ . '/../views' . $route.'.php';
    }
    
    public static function redirect($route)
    {
        return header('Location:' . $route);
    }

}
