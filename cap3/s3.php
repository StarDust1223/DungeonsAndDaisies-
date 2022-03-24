<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap3"]=$request;
if($request){
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap3"]["damage"]=damage(-30);
    }
    if($request["cefaci"]==="refuzi"){
        $_SESSION["cap3"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap3"]["damage"]=damage(35);
    }
    finish("../cap4");
}
?>

<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap2"]["cefaci"] . $_SESSION["cap2"]["damage"]?> </h4>
<h1>Ti-a iesit in cale o batranica! Ea vrea sa te ude pentru +30 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["accepti", "refuzi", "injuri"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/oldLady.jpg" alt="Batranica">
            </div>
        </div>
    <?php include("../templates/footer.php")?>