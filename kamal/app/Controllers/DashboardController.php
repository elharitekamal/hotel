<?php

class DashboardController extends rooms
{
    public function index()
    {
        if (isset($_SESSION['email_admin'])) {
            $data['datas'] = $this->select_room();
            view::load('dashboard', $data);
        } else {
            view::load('loginadmin');
        }
    }

}