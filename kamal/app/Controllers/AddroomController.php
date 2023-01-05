<?php

class AddroomController extends rooms
{
    public function index()
    {

        if (isset($_POST["addroom"])) {
            $name_room = $_POST['room_name'];
            $type_room = $_POST['room_type'];
            $price = $_POST['price'];
            $room_image_name = $_FILES["imagee"]["name"];
            $room_image_tmpname = $_FILES["imagee"]["tmp_name"];
            $room_image_filepath = "assets/uploads/" . $room_image_name;
            move_uploaded_file($room_image_tmpname, $room_image_filepath);
            if (isset($_POST['type_suite'])) {
                $type_suite = $_POST['type_suite'];
            } else {
                $type_suite = '';
            }

            $result = $this->insert_room($name_room, $type_room, $price, $type_suite, $room_image_name);

        }

        view::load('addroom');
    }



}