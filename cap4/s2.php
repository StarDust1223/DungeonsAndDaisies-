<?php
include ("../functions.php");
damage(10);
$request = isset($_POST)?$_POST:null;
$_SESSION["cap4"]=$request;
if($request){
    if($request["cefaci"]==="ataci"){
       $_SESSION["cap4"]["damage"]=damage(rand(-10,10));
    }
    if($request["cefaci"]==="fugi"){
        $_SESSION["cap4"]["damage"]=damage(rand(0,10));
    }
    if($request["cefaci"]==="ascunzi"){
        $_SESSION["cap4"]["damage"]=damage(0);
    }
    finish("../cap5");
}
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap3"]["cefaci"] . $_SESSION["cap3"]["damage"]?> </h4>
<h1>A inceput o ploaie acida. Te uzi si pierzi -10 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["ataci", "fugi", "ascunzi"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/acidRain.jpg" alt="Ploaie acida">
            </div>
        </div>
    <?php include("../templates/footer.php")?>