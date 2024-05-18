<?php

class Database{
    private $connection;
    function __construct(){
        $this->connection = new mysqli("localhost", "root", "", "tubes");
    }
    function select($table){
        //SELECT * FROM namaTabel
        $sql = "SELECT * FROM $table";
        $query = $this->connection->query($sql);
        $data = $query->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
}
