 <?php

class userController{
    public static function profile()
    {
        return Direction::render('/user/profile');
    }

    public static function index()
    {
        return Direction::render('/user/index');
    }
}


