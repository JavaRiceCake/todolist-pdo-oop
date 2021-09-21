<?php
class update extends connection {
    public $task;

    public function __construct($task){
        $this->task = $task;

    }

    public function updateTask(){
        $con = $this->con();
        $queryUpdate = "UPDATE tblist SET `status`='COMPLETE' ,`complete_at`=NOW() WHERE `id`= $this->task";
        $sqlUpdate = $con->prepare($queryUpdate);
        if($sqlUpdate->execute()){
            return true;
        }else{
            return false;
        }
        
    }
}





?>