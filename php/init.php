<?php
require('function.php'); // para d na mag requir lagi ng function.php

spl_autoload_register(function($class){ //this line of code is para d kana paulit ulit mag require ng class example morethan 1 ung class mo

    require $_SERVER['DOCUMENT_ROOT'].'/todolist/class/'.$class.'.php'; 

});

?>