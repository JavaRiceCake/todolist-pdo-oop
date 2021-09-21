<?php
class insert extends connection {
    public $task;

    public function __construct($task){
        $this->task = $task;

    }

    public function insertTask(){
        $con = $this->con();
        $queryInsert = "INSERT INTO `tblist` (`items`) VALUES ('$this->task')";
        $sqlInsert = $con->prepare($queryInsert);
        if($sqlInsert->execute()){
            return true;
        }else{
            return false;
        }
        
    }
}





?>