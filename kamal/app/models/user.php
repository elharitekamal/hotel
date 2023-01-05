<?php
require(MODELS . "/connexion.php");
class user extends connection
{
    public function register_user($first_name, $last_name, $email, $age, $password)
    {

        $sql = mysqli_query($this->connect(), "SELECT * FROM user WHERE email = '$email'");
        if (mysqli_num_rows($sql) > 0) {
            return 10;
            // Username or email has already taken
        } else
            $sql = "INSERT INTO user (first_name, last_name, email, age, password) VALUES ('$first_name', '$last_name', '$email', '$age', '$password')";
        $result = mysqli_query($this->connect(), $sql);
        return 1;
    }


    public function user_login($email, $password)
    {

        $query = "SELECT * FROM user WHERE email='$email' && password='$password' ";
        if (mysqli_num_rows(mysqli_query($this->connect(), $query)) > 0) {
            return 1;
        } else {
            return 10;
        }

    }






}