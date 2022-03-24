<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap5"]=$request;
if($request){
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap5"]["damage"]=damage(-35);
    }
    if($request["cefaci"]==="refuzi"){
        $_SESSION["cap5"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap5"]["damage"]=damage(35);
    }
    finish("../final/bine.php");
}
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap4"]["cefaci"] . $_SESSION["cap4"]["damage"]?> </h4>
<h1>Un bondarel vrea sa traga un pui de somn in florile tale. Daca il lasi, acesta te va poleniza pentru +35 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["accepti", "refuzi", "injuri"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/bondar.jpg" alt="Bondar">
            </div>
        </div>
    <?php include("../templates/footer.php")?>