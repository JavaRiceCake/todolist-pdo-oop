<?php
require('php/init.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>

   <nav class="navbar navbar-dark bg-dark shadow">
       <span class="navbar-brand mb-0 h1">TOdo List</span>
   </nav>
   <div class="container mt-5" >
     <?php insertT();?>
     <?php deleteT();?>
     <?php updateT()?>
       <form action="" method="GET">
           <div class="row">
               <div class="col-md-9  form-group">
               <input class="form-control"  type="text" name="items" placeholder="Type your Task " required>
               </div>
               <div class="col-md">
               <button class="btn btn-outline-secondary" type="submit" id="btnSubmit" name="btnSubmit">ADD TASK</button>
               </div>
           </div>
       </form>
       <?php $viewData = new view();
       $viewData->viewTask();
       ?>

   </div>


   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

  </body>
</html>