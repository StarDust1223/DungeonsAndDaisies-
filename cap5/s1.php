<?php
include ("../functions.php");
damage(1);
$actions = [
    "ataci" => rand(-10,10),
    "fugi"=> rand(0,10),
    "ascunzi"=>0

];
proceseaza($actions, "cap5", "final/bine.php");
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