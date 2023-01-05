<?php

class RegisterController extends user
{
    public function index()
    {
        $data["msg"] = "";
        if (isset($_POST["submit"])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['user_email'];
            $age = $_POST['age'];
            $password = $_POST['user_password'];
            $result = $this->register_user($first_name, $last_name, $email, $age, $password);
            if ($result == 1) {
                $data["msg"] = "Registration Successful";
            } else {
                $data["msg"] = "Email Already Exist";
            }


        }



        view::load('register', $data);
    }




}