<?php

class ReservationsController
{
    public function index()
    {
        if (isset($_SESSION['email_user'])) {
            view::load('reservations');
        } else {
            view::load('login');
        }

    }

}