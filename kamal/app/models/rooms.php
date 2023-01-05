<?php
require(MODELS . "/connexion.php");
class rooms extends connection
{

    public function insert_room($name_room, $type_room, $price, $type_suite, $room_image_name)
    {

        $sql = "INSERT INTO rooms (name_room, type_room, price, type_suite, imagee) VALUES ('$name_room', '$type_room', '$price', '$type_suite', '$room_image_name')";
        $result = mysqli_query($this->connect(), $sql);
    }

    public function select_room()
    {
        $sql = "SELECT * FROM rooms";
        $req = mysqli_query($this->connect(), $sql);
        return $req;
    }
    public function remove($id)
    {
        $sql = "DELETE FROM rooms WHERE id_room = $id";
        $req = mysqli_query($this->connect(), $sql);
    }

    public function editroom($name_room, $type_room, $price, $type_suite, $room_image_name, $id)
    {
        if (empty($room_image_name)) {
            $sql = "UPDATE rooms SET name_room ='$name_room',type_room='$type_room',price='$price',type_suite='$type_suite'
          WHERE id_room = $id";
        } else {
            $sql = "UPDATE rooms SET name_room ='$name_room',type_room='$type_room',price='$price',type_suite='$type_suite',imagee='$room_image_name'
          WHERE id_room = $id";

        }
        $req = mysqli_query($this->connect(), $sql);
    }

    public function edit_select($id)
    {
        $sql = "SELECT * FROM rooms where id_room = $id";
        $req = mysqli_query($this->connect(), $sql);
        return $req;
    }
}