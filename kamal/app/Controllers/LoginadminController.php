<?php

class LoginadminController extends admin
{
    public function index()
    {
        $data['msg'] = '';
        if (isset($_POST['loginadmin'])) {

            $email = ($_POST['email']);
            $password = ($_POST['password']);

            $result = $this->admin_login($email, $password);
            if ($result == 1) {
                $_SESSION['email_admin'] = $email;
                $_SESSION['admin'] = true;
                header("location:/dashboard");
            } else {
                $data['msg'] = 'Invalid Entry, try again';
            }


        }
        view::load('loginadmin', $data);
    }

}