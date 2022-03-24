<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap4"]=$request;
if($request){
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap4"]["damage"]=damage(-40);
    }
    if($request["cefaci"]==="refuzi"){
        $_SESSION["cap4"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap4"]["damage"]=damage(35);
    }
    finish("../cap5");
}
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap3"]["cefaci"] . $_SESSION["cap3"]["damage"]?> </h4>
<h1>Un gradinar ti-a iesit in cale! El iti ofera ingrasamant pentru +40 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["accepti", "refuzi", "injuri"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/gardener.jpg" alt="Gradinar">
            </div>
        </div>
    <?php include("../templates/footer.php")?>