<?php


class UserlogoutController extends user
{
    public function index()
    {
        if (session_destroy()) {
            header("location:login");
        }
    }
}