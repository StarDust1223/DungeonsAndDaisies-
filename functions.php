<?php
session_start();
function damage($damage){
    $_SESSION["hp"]=$_SESSION["hp"]-$damage;
   return $damage;
}

function finish($next){
    if($_SESSION["hp"]<=0){
       return header("Location: ../final/rau.php");
      
    }
    else{
        score();
        return header("Location: $next");
    }
}

function viata(){
    echo "viata ta este: " . $_SESSION["hp"];
}


/** 
 * @Input options type Array
 */
function formular($options){
// ["ataci", "fugi", "ascunzi"]

    echo "<form action='' method='POST'>"; //deschidem formular
    echo "<label for=\"cefaci\">Ce faci? </label>";
    echo "<select name=\"cefaci\" id=\"cefaci\" class=\"form-control\">";    
        foreach($options as $option){
         echo "<option value=\"$option\">$option</option>";
        }
    echo "</select>";
    echo "<button class=\"btn btn-info mt-3\" type=\"submit\">Actioneaza!</button>";
    echo "</form>"; //inchidem formular

}

function imagine($imagine, $alt="imagine"){
    echo "<img class=\"img img-responsive\" src=\"../images/$imagine\" alt=\"$alt\">";
} 

function proceseaza($actions, $capitol, $nextCap){
    $request = isset($_POST)?$_POST:null;
    if($request) {
        $_SESSION[$capitol] = $request;
        if(isset($request['cefaci'])){
            $_SESSION[$capitol]['cefaci'] = $request['cefaci'];
            $_SESSION[$capitol]['damage'] = $actions[$request['cefaci']];
        } else {
            // de verificat ce s-a intamplat
        }
        finish("../$nextCap");
    }

    
}

function score(){
    if (isset($_SESSION["score"])){
        $_SESSION["score"]++;
    }else{
        $_SESSION["score"]=1;
    }
}
?>