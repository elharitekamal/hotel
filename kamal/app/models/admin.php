<?php
require(MODELS . "/connexion.php");
class admin extends connection
{
    public function admin_login($email, $password)
    {

        $query = "SELECT * FROM admin WHERE email='$email' && password='$password' ";
        if (mysqli_num_rows(mysqli_query($this->connect(), $query)) > 0) {
            return 1;
        }


    }

}