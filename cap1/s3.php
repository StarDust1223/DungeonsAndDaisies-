<?php
include ("../functions.php");
$request = isset($_POST)?$_POST:null;
$_SESSION["cap1"]=$request;
if($request){
    if($request["cefaci"]==="accepti"){
        $_SESSION["cap1"]["damage"]=damage(-5);
    }
    if($request["cefaci"]==="refuzi"){
        $_SESSION["cap1"]["damage"]=damage(0);
    }
    if($request["cefaci"]==="injuri"){
        $_SESSION["cap1"]["damage"]=damage(35);
    }
    finish("../cap2");
}
?>

<?php include("../templates/header.php")?>

<h1>Ti-a iesit in cale o printesa! Printesa te trimite sa ii recuperezi bijuteriile pentru +5 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["accepti", "refuzi", "injuri"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/princess.jpg" alt="Printesa">
            </div>
        </div>
    <?php include("../templates/footer.php")?>