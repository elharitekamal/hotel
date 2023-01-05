<?php


  class connection{

    public function connect(){
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='pestana';

        $conn = new mysqli($servername,$username, $password,$dbname); 

        return $conn;
    }



}

?>