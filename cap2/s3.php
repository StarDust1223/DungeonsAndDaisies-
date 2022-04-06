<?php
include("../functions.php");
$actions = [
    "accepti" => -17,
    "refuzi"=> 0,
    "injuri"=>rand(0,10)

];
proceseaza($actions, "cap2", "cap3");
score();
?>
<?php include("../templates/header.php")?>

<h4>Ai ales:<?php echo $_SESSION["cap1"]["cefaci"] . $_SESSION["cap1"]["damage"]?> </h4>
<h1>Ti-a iesit in cale o albina! Ea te roaga sa ii dai nectarul tau la schimb pentru 17 hp!</h1>
<div class="alert alert-primary" role="alert">
            <?php viata()?>
        </div>
        <div class="row">
            <div class="col">
            <?php formular(["accepti", "refuzi", "injuri"]) ?>
            </div>
            <div class="col">
            <img class="img img-responsive" src="../images/bee.jpg" alt="Albina">
            </div>
        </div>
    <?php include("../templates/footer.php")?>