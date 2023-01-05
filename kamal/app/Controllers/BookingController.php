<?php

class BookingController extends rooms
{


    public function index()
    {
        $data['datas'] = $this->select_room();
        view::load('booking', $data);

    }
    public function Delete($id)
    {
        $this->remove($id);
        header("location:/dashboard");
    }





}