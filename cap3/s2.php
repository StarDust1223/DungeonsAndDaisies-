<?php
include ("../functions.php");
damage(20);
$request = isset($_POST)?$_POST:null;
$_SESSION["cap3"]=$request;
if($request){
    if($request["cefaci"]==="ataci"){
       $_SESSION["cap3"]["damage"]=damage(rand(-10,10));
    }
    if($request["cefaci"]==="fugi"){
        $_SESSION["cap3"]["damage"]=damage(rand(0,10));
    }
    if($request["cefaci"]==="ascunzi"){
        $_SESSION["cap3"]["damage"]=damage(0);
    }
    finish("../cap4");
}

?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap2"]["cefaci"] . $_SESSION["cap2"]["damage"]?> </h4>
<h1>Ti-a iesit in cale o pisica! Ea te calca pentru -20 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["ataci", "fugi", "ascunzi"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/cat.jpg" alt="Pisica">
            </div>
        </div>
    <?php include("../templates/footer.php")?>