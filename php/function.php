<?php

 function insertT(){
    if(isset($_GET['btnSubmit'])){
        $items=$_GET['items'];
    
        $insert = new insert($items);
    
        if($insert->insertTask()){
            echo '<div class="container">
                     <div class="row">
                         <div class="col col-md-9">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> Successfuly Added Task!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                          </div>
                     </div>
                 </div>';
        }else{
            echo '<div class="container">
                     <div class="row">
                         <div class="col col-md-9">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> Invalid Added Task!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                          </div>
                     </div>
                 </div>';
        }
    }
 }

 function deleteT(){
    if(isset($_GET['btnDelete'])){
        $hvDeleteid=$_GET['hvDeleteid'];
    
        $delete = new delete($hvDeleteid);
    
        if($delete->deleteTask()){
            echo '<div class="container">
                     <div class="row">
                         <div class="col col-md-9">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> Successfuly DELETE Task!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                          </div>
                     </div>
                 </div>';
        }else{
            echo '<div class="container">
                     <div class="row">
                         <div class="col col-md-9">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> Invalid Added Task!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                          </div>
                     </div>
                 </div>';
        }
    }
 }

 function updateT(){
    if(isset($_GET['btnComplete'])){
        $hvCompleteid=$_GET['hvCompleteid'];
    
        $update = new update($hvCompleteid);
    
        if($update->updateTask()){
            echo '<div class="container">
                     <div class="row">
                         <div class="col col-md-9">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> COMPLETE Task!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                          </div>
                     </div>
                 </div>';
        }else{
            echo '<div class="container">
                     <div class="row">
                         <div class="col col-md-9">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> Invalid Added Task!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                          </div>
                     </div>
                 </div>';
        }
    }
 }



?>