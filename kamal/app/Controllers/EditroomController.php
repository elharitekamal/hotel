<?php

class EditroomController extends rooms
{
    public function index($id)
    {

        if (isset($_POST["submit"])) {
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

            $this->editroom($name_room, $type_room, $price, $type_suite, $room_image_name, $id);
            header("location:/dashboard");

        }
        $data['datas'] = $this->edit_select($id);
        view::load('editroom', $data);
    }



}