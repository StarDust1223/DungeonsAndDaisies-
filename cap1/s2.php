<?php
include ("../functions.php");
damage(15);
$request = isset($_POST)?$_POST:null;
$_SESSION["cap1"]=$request;
if($request){
    //aici tratam formularul
    if($request["cefaci"]==="ataci"){
       $_SESSION["cap1"]["damage"]=damage(rand(-10,10));
    }
    if($request["cefaci"]==="fugi"){
        $_SESSION["cap1"]["damage"]=damage(rand(0,10));
    }
    if($request["cefaci"]==="ascunzi"){
        $_SESSION["cap1"]["damage"]=damage(0);
    }
    finish("../cap2");
    //header("Location: ../cap2");
}
?>
<?php include("../templates/header.php")?>

<h1>Ti-a iesit in cale o arahnida uriasa! Arahnida uriasa te-a muscat pentru -15 hp!</h1>
    <div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["ataci", "fugi", "ascunzi"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/spider.jpg" alt="Arahnida">
            </div>
        </div>
<?php include("../templates/footer.php")?>