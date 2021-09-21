<?php
class delete extends connection {
    public $task;

    public function __construct($task){
        $this->task = $task;

    }

    public function deleteTask(){
        $con = $this->con();
        $queryDelete = "DELETE FROM tblist WHERE `id`= $this->task";
        $sqlDelete = $con->prepare($queryDelete);
        if($sqlDelete->execute()){
            return true;
        }else{
            return false;
        }
        
    }
}





?>