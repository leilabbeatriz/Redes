<?php

class Auth{

    public static function userName()
    {
        $user = new User(connection());

        $data = $user->find("SELECT * FROM users WHERE id = '{$_SESSION['user']}' ");

        $arr = [];
        foreach($data as $row ){
            $arr[]=$row['firstname'];
            $arr[]=$row['lastname'];
        }
        return $arr;
    }


    public static function userId()
    {
        $user = new User(connection());

        $data =$user->find("SELECT id FROM users WHERE id =" . $_SESSION['user'] . "");

        $arr = [];
        foreach($data as $row ){
            $arr[]=$row['id'];
        }

        return $arr[0];
    }


    public static function userAuth()
    {
        $user = new User(connection());
        
        $data =$user->find("SELECT * FROM users WHERE id = " . $_SESSION['user'] . "");

        $arr = [];
        foreach($data as $row ){
            $arr[]=$row['id'];
            $arr[]=$row['firstname'];
            $arr[]=$row['lastname'];
            $arr[]=$row['email'];
            $arr[]=$row['access'];
        }

        return $arr;
    }

    public static function userEmail()
    {
        $user = new User(connection());

        $data = $user->find("SELECT * FROM users WHERE id = " .$_SESSION['user']. "");
        $arr = [];

        foreach($data as $row ){
            $arr[]=$row['email'];
        }

        return $arr[0];
    }

    public static function userPassword()
    {
        $user = new User(connection());

        $data = $user->find("SELECT * FROM users WHERE id = " .$_SESSION['user']. "");
        
        $arr = [];
        foreach($data as $row ){
            $arr[]=$row['password'];
        }

        return $arr[0];
    }

    public static function authenticate(){

        if (!(isset($_SESSION['user']))) {
            return Direction::redirect('/errors/notauthenticate');
        }
    }

}
