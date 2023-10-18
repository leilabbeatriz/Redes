<?php
class authController
{

    public static function login()
    {
        return Direction::render('/auth/login');
    }

    public static function register()
    {
        return Direction::render('/auth/register');
    }

    public static function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
            setcookie("PHPSESSID", null, strtotime("-36000 seconds"));

            return Direction::redirect('/');
        } else {
            return Direction::redirect('/');
        }
    }

    public static function logar()
    {
        $user = new User(connection());

        $data = $user->find("SELECT * FROM users WHERE email LIKE '%" . $_POST['email'] . "%'");

        foreach ($data as $row) {//isso é por causo do mysql
            $data = $row['id'];
        }

        if ($data) {
            $_SESSION['user'] = $data;
            return Direction::redirect('/dash');
        } else {
            return Direction::redirect('/login');
        }
    }

    public static function registrar()
    {
        $user = new User(connection());
        $user->register($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['password']);
        return Direction::redirect('/login');
    }
}
