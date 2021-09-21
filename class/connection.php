<?php

class connection{
    //properties
    private $user='root';
    private $password='121816';
    public $pdo = null;


    //function/methods

    public function con() //this line of code is to check if connected na tau sa database
    {
       try {
        $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=dblist',$this->user,$this->password);
       } catch (PDOException $e) {
          die($e->getMessage());
       }
       return $this->pdo;

    }






}



?>