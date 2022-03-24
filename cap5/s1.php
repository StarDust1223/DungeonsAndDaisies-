<?php
include ("../functions.php");
damage(34);
$request = isset($_POST)?$_POST:null;
$_SESSION["cap5"]=$request;
if($request){
    if($request["cefaci"]==="ataci"){
       $_SESSION["cap5"]["damage"]=damage(rand(-10,10));
    }
    if($request["cefaci"]==="fugi"){
        $_SESSION["cap5"]["damage"]=damage(rand(0,10));
    }
    if($request["cefaci"]==="ascunzi"){
        $_SESSION["cap5"]["damage"]=damage(0);
    }
    finish("../final/bine.php");
}
?>


<?php include("../templates/header.php")?>

    <h4>Ai ales:<?php echo $_SESSION["cap4"]["cefaci"] . $_SESSION["cap4"]["damage"]?> </h4>
    <h1>Ti-a iesit in cale o colonie de paduchi. Te rontaie pentru  -34 hp!</h1>
    <div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["ataci", "fugi", "ascunzi"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/paduchi.jpg" alt="Paduchi">
            </div>
        </div>
    <?php include("../templates/footer.php")?>