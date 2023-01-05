<?php

class LoginController extends user
{
    public function index()
    {

        $data["msg"] = "";
        if (isset($_POST['login'])) {

            $email = ($_POST['email']);
            $password = ($_POST['password']);
            $result = $this->user_login($email, $password);
            if ($result == 1) {
                $_SESSION['email_user'] = $email;
                $_SESSION['user'] = true;

                header("location:/reservations");
            } else {
                $data["msg"] = "Password or Email is incorrect";
            }







        }


        if (!isset($_SESSION["email"])) {
            view::load('login', $data);
        } else {
            view::load('logoutfirst', $data);
        }
    }

}