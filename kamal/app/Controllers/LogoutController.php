<?php


class LogoutController extends admin
{
    public function index()
    {
        if (session_destroy()) {
            header("location:loginadmin");
        }
    }
}