<?php
class view extends connection{
 
    public function viewTask(){

        $con=$this->con();
        $queryviewTask = "SELECT * FROM tblist WHERE `status` = 'PENDING'";
        $sqlviewTask = $con->prepare($queryviewTask);
        $sqlviewTask->execute();
        $rows = $sqlviewTask->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<h3>PENDING TASK</h3>
                <table class='table mb-5 table-dark table-hover'>
                <thead>
                <tr>
                <th>Items</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>";
         foreach($rows as $row){
               echo "<tr>";
                echo"<td>$row[items]</td>";
                echo"<td>
                <form action='' method='get'>
                <input  class='btn btn-danger' type='submit' name='btnDelete' value='DELETE'>
                <input  class='btn btn-danger' type='hidden' name='hvDeleteid' value='$row[id]'>
                <input  class='btn btn-primary' type='submit' name='btnComplete' value='COMPLETE'>
                <input  class='btn btn-primary' type='hidden' name='hvCompleteid' value='$row[id]'>
                </form>
                    </td>";
                echo"</tr>";
         }       
          
          echo  "</tbody></table>";  
        
          $con=$this->con();
          $queryviewTask = "SELECT * FROM tblist WHERE `status` = 'COMPLETE'";
          $sqlviewTask = $con->prepare($queryviewTask);
          $sqlviewTask->execute();
          $rows = $sqlviewTask->fetchAll(PDO::FETCH_ASSOC);
          echo "<h3>COMPLETED TASK</h3>
          <table class='table table-dark table-hover'>
          <thead>
          <tr>
          <th>Items</th>
          <th>Date</th>
          </tr>
          </thead>
          <tbody>";
   foreach($rows as $row){
         echo "<tr>";
          echo"<td>$row[items]</td>";
          echo"<td>$row[complete_at]</td>";
          echo"</tr>";
   }       
    
    echo  "</tbody></table>";  
  


    }




}




?>