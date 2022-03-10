<?php
session_start();
function damage($damage){
    $_SESSION["hp"]=$_SESSION["hp"]-$damage;
   echo "viata ta este: " . $_SESSION["hp"];
   return $damage;
}

function finish($next){
    if($_SESSION["hp"]<=0){
       return header("Location: ../final/rau.php");
      
    }
    else{
        return header("Location: $next");
    }
}

?>